<?php

namespace App\Http\Controllers;

use App\Models\pulsa;
use App\Models\transaksi;
use App\Models\transaksiDetail;
use App\Models\User;
use App\Models\wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PulsaController extends Controller
{
    function index(){
        $pulsas = pulsa::get();
        return view("home.pulsa.index")->with('pulsas',$pulsas);
    }

    function beliPulsa($id){
        $pulsa = pulsa::where('id',$id)->first();
        return view('home.pulsa.tujuan')->with('pulsa',$pulsa);
    }

    function pesan(Request $request, $id){
        $pulsa = pulsa::where('id',$id)->first();
        $tanggal = Carbon::now();
        $jenis = "BELI PULSA";

        $request->validate([
            'no_telp' => 'required|min:12'
        ],[
            'no_telp.required' => 'Nomor Telepon Harus Diisi',
            'no_telp.min' => 'Nomor Telepon Harus Minimal 12 Karakter',
        ]);

        //simpan ke database transaksi
        $transaksi = new transaksi;
        $transaksi->user_id = Auth::user()->id;
        $transaksi->tanggal = $tanggal;
        $transaksi->jenis = $jenis;
        $transaksi->no_tujuan = $request->no_telp;
        $transaksi->status = 0;
        $transaksi->harga = $pulsa->harga;
        $transaksi->jumlah_harga = $pulsa->harga;
        $transaksi->keterangan = $pulsa->keterangan;
        $transaksi->save();

        return redirect('pulsa/'.'bayar/'.$transaksi->id);
    }

    function pembayaran($id){
        $wallets = wallet::get();
        $transaksi = transaksi::where('id',$id)->first();
        return view('home.pulsa.pembayaran',compact('wallets','transaksi'));
    }

    function bayar(Request $request, $id){
        //simpan ke database transaksi detail
        $tanggal = Carbon::now();
        $pulsa = pulsa::where('id',$id)->first();
        $transaksi = transaksi::where('id',$id)->first();
        $user = Auth::user();
        // kondisi jika pembayaran dilakukan dengan saldo DigiLine jika saldo tidak cukup
        if($request->wallet == "DigiLine" && $transaksi->jumlah_harga > $user->saldo ){
            return redirect('pulsa/bayar/'.$transaksi->id)->withErrors('Saldo kamu tidak cukup!');
        }
        else{
            $transaksi_detail = new transaksiDetail;
            $transaksi_detail->transaksi_id = $transaksi->id;
            $transaksi_detail->jenis = $transaksi->jenis;
            $transaksi_detail->tanggal = $tanggal;
            $transaksi_detail->no_tujuan = $transaksi->no_tujuan;
            $transaksi_detail->pembayaran = $request->wallet;
            $transaksi_detail->jumlah_harga = $transaksi->jumlah_harga;
            $transaksi_detail->keterangan = $transaksi->keterangan;
            $transaksi_detail->save();

            $transaksi->status = 1;
            $transaksi->update();
        }
        // kondisi jika pembayaran dilakukan dengan saldo DigiLine maka dilakukan pengurangan saldo
        if($request->wallet == "DigiLine"){
            $user->saldo = $user->saldo - $transaksi->jumlah_harga;
            $user->update();
        }

        return redirect('pulsa/rincian/'.$transaksi_detail->id);
    }

    function rincian(Request $request,$id){
        $transaksi_detail = transaksiDetail::where('id',$id)->first();
        $transaksi = transaksi::where('id',$id)->first();
        return view("home/pulsa/rincian",compact('transaksi_detail','transaksi'));
    }

    public function batal($id){
        transaksi::where('id',$id)->delete();
        return redirect('/dashboard')->with('success','Pembelian pulsa dibatalkan');
    }
    
}

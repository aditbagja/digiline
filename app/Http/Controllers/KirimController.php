<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\transaksiDetail;
use App\Models\User;
use App\Models\wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KirimController extends Controller
{
    // Kirim Saldo
    function index(){
        $wallets = wallet::all();
        return view("home.kirim.index")->with('wallets',$wallets);
    }
    function tujuan($id){
        $wallet = wallet::where('id', $id)->first();
        return view("home.kirim.tujuan")->with('wallet',$wallet);
    }

    function jumlahKirim(Request $request, $id){
        
        $wallet = wallet::where('id',$id)->first();
        $jenis = 'KIRIM SALDO';
        $keterangan = 'Kirim Saldo'.' '.$wallet->name;
        $tanggal = Carbon::now();
        $request->validate([
            'no_tujuan' => 'required|min:12'
        ],[
            'no_tujuan.required' => 'Nomor Tujuan Harus Diisi',
            'no_tujuan.min' => 'Nomor Tujuan harus terdiri dari minimal 12 Karakter'
        ]);

        $transaksi = new transaksi();
        $transaksi->user_id = Auth::user()->id;
        $transaksi->jenis = $jenis;
        $transaksi->tanggal = $tanggal;
        $transaksi->no_tujuan = $request->no_tujuan;
        $transaksi->wallet_tujuan = $wallet->name;
        $transaksi->harga = 0;
        $transaksi->jumlah_harga = 0;
        $transaksi->status = 0;
        $transaksi->keterangan = $keterangan;
        $transaksi->save();

        return redirect('kirim/jumlah/'.$transaksi->id);
    }
    function jumlah(Request $request, $id){
        $transaksi = transaksi::where('id',$id)->first();
        return view('home/kirim/jumlahtrf')->with('transaksi',$transaksi);
    }

    function jumlahTransfer(Request $request,$id){
        $transaksi = transaksi::where('id',$id)->first();
        $admin = 500;
        $request->validate([
            'jumlah' => 'required|numeric|min:10000|not_in:0'
        ],[
            'jumlah.required' => 'Jumlah Transfer Harus Diisi',
            'jumlah.numeric' => 'Jumlah harus terdiri dari angka',
            'jumlah.not_in' => 'Jumlah tidak boleh 0',
            'jumlah.min' => 'Jumlah Transfer minimum adalah Rp. 10.000'
        ]);
        
            $transaksi->nama_penerima = fake()->name();
            $transaksi->harga = $request->jumlah;
            $transaksi->jumlah_harga = $request->jumlah + $admin;
            $transaksi->update();

        return redirect('kirim/rinciantrf/'.$transaksi->id);
    }

    function rinciantrf($id){
        $transaksi = transaksi::where('id',$id)->first();
        return view('home/kirim/rinciantrf')->with('transaksi',$transaksi);
    }

    function metodebayar($id){
        $wallets = wallet::all();
        $transaksi = transaksi::where('id',$id)->first();
        return view('home/kirim/metodebayar',compact('wallets','transaksi'));
    }

    function sukses(Request $request, $id){
        $transaksi = transaksi::where('id',$id)->first();
        $tanggal = Carbon::now();
        $user = Auth::user();
        $user_new = User::get();
        
        if($request->wallet == "DigiLine" && $transaksi->jumlah_harga > $user->saldo ){
            return redirect(url('kirim/rinciantrf/'.$transaksi->id))->withErrors('Saldo kamu tidak mencukupi');
        }
        else{
            $transaksi_detail = new transaksiDetail();
            $transaksi_detail->transaksi_id = $transaksi->id;
            $transaksi_detail->jenis = $transaksi->jenis;
            $transaksi_detail->tanggal = $tanggal;
            $transaksi_detail->wallet_tujuan = $transaksi->wallet_tujuan;
            $transaksi_detail->no_tujuan = $transaksi->no_tujuan;
            $transaksi_detail->pembayaran = $request->wallet;
            $transaksi_detail->jumlah_harga = $transaksi->jumlah_harga;
            $transaksi_detail->keterangan = $transaksi->keterangan;
            $transaksi_detail->save();

            $transaksi->status = 1;
            $transaksi->update();
        }
        if($request->wallet == "DigiLine"){
            $user->saldo = $user->saldo - $transaksi->jumlah_harga;
            $user->update();
        }

        return redirect('kirim/detail/'.$transaksi_detail->id);
    }

    function detail($id){
        $transaksi_detail = transaksiDetail::where('id',$id)->first();
        return view('home/kirim/detail',compact('transaksi_detail'));
    }

    function batal($id){
        $transaksi = transaksi::where('id',$id)->first();
        transaksi::where('id',$id)->delete();
        return redirect('/dashboard')->with('success','Kirim saldo dibatalkan');
    }
  
}

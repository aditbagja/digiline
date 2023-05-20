<?php

namespace App\Http\Controllers;

use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = wallet::orderBy('id','asc')->paginate(5);
        return view('home/wallet/index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home/wallet/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('name', $request->name);

        $request->validate([
            'name'=>'required',
            'logo' => 'required|mimes:jpeg,jpg,png,gif'
        ],[
            'name.required' => 'Nama Wallet harus diisi',
            'logo.required' => 'Logo harus diisi',
            'logo.mimes' => 'Logo yang diperbolehkan yaitu berekstensi JPEG, JPG, PNG, dan GIF',
        ]);

        $logo_file = $request->file('logo');
        $logo_ekstensi = $logo_file->extension();
        $logo_nama = date('ymdhis').".".$logo_ekstensi;
        $logo_file->move(public_path('wallet_logo'),$logo_nama);

        $data = [
            'name'=>$request->input('name'),
            'logo'=>$logo_nama
        ];
        wallet::create($data);
        return redirect('wallet')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = wallet::where('id', $id)->first();
        return view('home/wallet/detail')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = wallet::where('id', $id)->first();
        return view('home/wallet/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required'
        ],[
            'name.required' => 'Nama harus diisi'
        ]);
        $data = [
            'name'=>$request->input('name')
        ];

        if($request->hasFile('logo')){
            $request->validate([
                'logo' => 'mimes:jpeg,jpg,png,gif'
            ],[
                'logo.mimes' => 'Logo yang diperbolehkan yaitu berekstensi JPEG, JPG, PNG, dan GIF'
            ]);
            $logo_file = $request->file('logo');
            $logo_ekstensi = $logo_file->extension();
            $logo_nama = date('ymdhis').".".$logo_ekstensi;
            $logo_file->move(public_path('wallet_logo'),$logo_nama);

            $data_logo = wallet::where('id',$id)->first();
            File::delete(public_path('wallet_logo').'/'.$data_logo->logo);

            $data['logo'] = $logo_nama;
        }
        wallet::where('id',$id)->update($data);
        return redirect('/wallet')->with('success','Data Wallet berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = wallet::where('id',$id)->first();
        File::delete(public_path('wallet_logo').'/'.$data->logo);
        wallet::where('id',$id)->delete();
        return redirect('/wallet')->with('success','Data Wallet berhasil dihapus');
    }
}

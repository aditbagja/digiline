<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::orderBy('id','asc')->paginate(5);
        return view('home/user/index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home/user/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        Session::flash('no_telp', $request->no_telp);
        Session::flash('tanggal_lahir', $request->tanggal_lahir);

        $request->validate([
            'name'=>'required|regex:/^[a-zA-Z\s]+$/',
            'jenis_kelamin'=>'required',
            'email'=>'required|email|unique:users',
            'no_telp'=>'required|numeric|min:12|unique:users',
            'tanggal_lahir'=>'required',
            'password'=>'required|min:6',
            'password_confirm'=>'required|min:6|same:password',
            'saldo' => 'default:0'
        ],[
            'name.required' => 'Nama harus diisi',
            'name.regex' => 'Nama tidak boleh mengandung angka dan simbol',
            'jenis_kelamin.required' => 'Silahkan pilih jenis kelamin',
            'email.required' => 'Email harus diisi',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'email.email' => 'Masukkan email yang valid',
            'email.unique' => 'Email sudah digunakan, silahkan masukan email yang lain',
            'no_telp.required' => 'No. Telepon harus diisi',
            'no_telp.min' => 'Minimum No. Telepon yang dibolehkan adalah 12 karakter',
            'no_telp.unique' => 'No. Telepon sudah digunakan, silahkan masukan No. Telepon yang lain',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Minimum password yang dibolehkan adalah 6 karakter',
            'password_confirm.required' => 'Konfirmasi Password harus sama',
            'password_confirm.min' => 'Minimum password yang dibolehkan adalah 6 karakter',
            'password_confirm.same' => 'Konfirmasi Password harus sama'
        ]);

        $data = [
            'name'=>$request->input('name'),
            'jenis_kelamin'=>$request->input('jenis_kelamin'),
            'email'=>$request->input('email'),
            'no_telp'=>$request->input('no_telp'),
            'tanggal_lahir'=>$request->input('tanggal_lahir'),
            'password'=>Hash::make($request->input('password'))
        ];

        if($request->hasFile('avatar')){
            $request->validate([
                'avatar' => 'mimes:jpeg,jpg,png,gif'
            ],[
                'avatar.mimes' => 'Avatar yang diperbolehkan yaitu berekstensi JPEG, JPG, PNG, dan GIF'
            ]);

            $avatar_file = $request->file('avatar');
            $avatar_ekstensi = $avatar_file->extension();
            $avatar_nama = date('ymdhis').".".$avatar_ekstensi;
            $avatar_file->move(public_path('avatar'),$avatar_nama);

            $data['avatar'] = $avatar_nama;
        }
        User::create($data);
        
        return redirect('user')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::where('id', $id)->first();
        return view('home/user/detail')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::where('id', $id)->first();
        return view('home/user/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|regex:/^[a-zA-Z\s]+$/',
            'jenis_kelamin'=>'required',
            'email'=>'required|email',
            'no_telp'=>'required|numeric|min:12',
            'tanggal_lahir'=>'required'
        ],[
            'name.required' => 'Nama harus diisi',
            'name.regex' => 'Nama tidak boleh mengandung angka dan simbol',
            'jenis_kelamin.required' => 'Silahkan pilih jenis kelamin',
            'email.required' => 'Email harus diisi',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'email.email' => 'Masukkan email yang valid',
            'no_telp.required' => 'No. Telepon harus diisi',
            'no_telp.min' => 'Minimum No. Telepon yang dibolehkan adalah 12 karakter'
        ]);
        $data = [
            'name'=>$request->input('name'),
            'jenis_kelamin'=>$request->input('jenis_kelamin'),
            'email'=>$request->input('email'),
            'no_telp'=>$request->input('no_telp'),
            'tanggal_lahir'=>$request->input('tanggal_lahir')
        ];

        if($request->hasFile('avatar')){
            $request->validate([
                'avatar' => 'mimes:jpeg,jpg,png,gif'
            ],[
                'avatar.mimes' => 'Avatar yang diperbolehkan yaitu berekstensi JPEG, JPG, PNG, dan GIF'
            ]);
            // proses input data avatar
            $avatar_file = $request->file('avatar');
            $avatar_ekstensi = $avatar_file->extension();
            $avatar_nama = date('ymdhis').".".$avatar_ekstensi;
            $avatar_file->move(public_path('avatar'),$avatar_nama);

            //proses delete data avatar sebelumnya
            $data_avatar = User::where('id',$id)->first();
            File::delete(public_path('avatar').'/'.$data_avatar->avatar);

            //proses upload avatar
            $data['avatar'] = $avatar_nama;
        }
        User::where('id',$id)->update($data);
        return redirect('/user')->with('success','Data User berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::where('id',$id)->first();
        File::delete(public_path('avatar').'/'.$data->avatar);
        User::where('id',$id)->delete();
        return redirect('/user')->with('success','Data User berhasil dihapus');
    }
}

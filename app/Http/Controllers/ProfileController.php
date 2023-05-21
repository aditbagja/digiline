<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

     function index(){
        $user = User::findOrFail(Auth::id());
        return view('profile/edit', compact('user'));
     }

    public function update(Request $request, $id)
{
    $request->validate([
        'name'       => 'required|regex:/^[a-zA-Z\s]+$/',
        'jenis_kelamin'       => 'required|string',
        'tanggal_lahir'       => 'required|date',
        'no_telp'       => 'required|string|min:12',
        'email'      => 'required|email|unique:users,email, ' . $id . ',id',  
    ],[
        'name.required' => 'Nama Harus diisi',
        'name.regex' => 'Nama tidak boleh mengandung angka dan simbol',
        'name.min' => 'Nama setidaknya harus minimal 2 karakter',
        'email.required' => 'Email Harus diisi',
        'no_telp.required' => 'Nomor Telepon Harus diisi',
        'no_telp.min' => 'Nomor Telepon Harus diisi minimal 12 Karakter',
        'email.unique' => 'Email sudah digunakan, silahkan masukkan email lain',
    ]);

    $user = User::find($id);

    $user->name = $request->name;
    $user->jenis_kelamin = $request->jenis_kelamin;
    $user->tanggal_lahir = $request->tanggal_lahir;
    $user->no_telp = $request->no_telp;
    $user->email = $request->email;

    if($request->hasFile('avatar')){
        $request->validate([
            'avatar' => 'mimes:jpeg,jpg,png,gif'
        ],[
            'avatar.mimes' => '* Avatar yang diperbolehkan yaitu berekstensi JPEG, JPG, PNG, dan GIF'
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
        User::where('id',$id)->update($data);
    }

    $user->save();
    return back()->with('status', 'Profile updated!');
}

    function password(){
        $user = User::findOrFail(Auth::id());
        return view('profile/password',compact('user'));
    }

    public function changepassword(Request $request, $id){
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|required_with:old_password|string|confirmed|min:6',
        ],[
            'old_password.required' => 'Password Harus diisi',
            'password.required' => 'Password Baru Harus diisi',
            'password.required_with' => 'Password Harus sama dengan password yang lama',
            'password.min' => 'Password Baru setidaknya harus terdiri minimal 6 karakter',
            'password.confirmed' => 'Password Konfirmasi harus sama dengan Password Baru'
        ]);

        $user = User::find($id);

        if ($request->filled('old_password')) {
            if (Hash::check($request->old_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()
                    ->withErrors(['old_password' => __('Password yang anda masukan salah!')])
                    ->withInput();
            }
        }

        $user->save();
        return back()->with('status', 'Password Updated!');
    }

}

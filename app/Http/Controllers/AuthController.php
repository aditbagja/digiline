<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    //  function index(){
    //      return view("auth/login");
    //  }

    function login(Request $request){
        Session::flash('email', $request->email);
        //$remember = $request->get('remember');
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => '* Email harus diisi',
            'password.required' => '* Password harus diisi'
        ]);

        $infologin =[
            'email'=> $request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            //otentikasi sukses
            if($request->has('remember')){
                Cookie::queue('useremail',$request->email,1440);
                Cookie::queue('userpassword',$request->password,1440);
            }
            return redirect('/dashboard');
        } else{
            //otentikasi gagal
            return redirect('login')->withErrors('Email atau password yang anda masukkan salah');
        }
        

    }


    function logout(){
        Auth::logout();
        return redirect('login')->with('success','Anda telah keluar');
    }

    function register(){
        return view('auth/register');
    }

    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'no_telp' => 'required|min:12|unique:users',
            'password' => 'required|min:6',
            'saldo' => 'default:0'
        ],[
            'name.required' => '* Nama harus diisi',
            'email.required' => '* Email harus diisi',
            'email.email' => '* Masukkan email yang valid',
            'email.unique' => '* Email sudah digunakan, silahkan masukan email yang lain',
            'no_telp.required' => '* No. Telepon harus diisi',
            'no_telp.min' => '* Minimum No. Telepon yang dibolehkan adalah 12 karakter',
            'no_telp.unique' => '* No. Telepon sudah digunakan, silahkan masukan No. Telepon yang lain',
            'password.required' => '* Password harus diisi',
            'password.min' => '* Minimum password yang dibolehkan adalah 6 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin =[
            'email'=> $request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            //otentikasi sukses
            return redirect('/dashboard')->with('success',Auth::user()->name.' Berhasil login');
        } else{
            //otentikasi gagal
            return redirect('login')->withErrors('Email atau password yang anda masukkan salah');
        }
    }

    
}

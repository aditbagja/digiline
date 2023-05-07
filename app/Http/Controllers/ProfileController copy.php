<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        return view('auth/profile');
    }
    function password(){
        return view('auth/password');
    }
    // public function edit($id){
    //     $data = user::where('id', $id)->first();
    //     return view('auth/profile');
    // }

}

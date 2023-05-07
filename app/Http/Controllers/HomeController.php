<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view("index");
    }

    function about(){
        return view("about");
    }

    function login(){
        return view("auth/login");
    }

    function dashboard(){
       // $data = User::get();
        return view("home/dashboard");
    }

    function kirim(){
        return view("home/kirim");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\transaksiDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $userId = Auth::id();
        $transaksi_details = TransaksiDetail::whereHas('transaksi', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->limit(5)->orderBy('tanggal', 'desc')->get();;
 
        return view("home/dashboard",compact('transaksi_details'));
    }

    function kirim(){
        return view("home/kirim");
    }
}

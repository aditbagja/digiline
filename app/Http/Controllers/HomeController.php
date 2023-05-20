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
        // $transaksi = 
        //  $query = DB::table('transaksi')->orderBy('id');
        //  $transaksis = $query->reorder('id', 'asc')->get();
        // $transaksis = DB::table('transaksi')->oldest()->get();
        $transaksis = transaksi::get();
        $transaksi_detail = transaksiDetail::get();
 
        return view("home/dashboard",compact('transaksis','transaksi_detail'));
    }

    function kirim(){
        return view("home/kirim");
    }
}

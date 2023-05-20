<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\transaksiDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    function index(Request $request){
        
        $transaksi_detail = transaksiDetail::get();
        $transaksis = transaksi::get();
        return view("home/riwayat/index",compact('transaksis','transaksi_detail'));
    }
}

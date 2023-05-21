<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\transaksiDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    function index(Request $request){
        
        $transaksi_detail = transaksiDetail::orderBy('tanggal','desc')->get();
        $transaksis = transaksi::orderBy('tanggal','desc')->get();
        return view("home/riwayat/index",compact('transaksis','transaksi_detail'));
    }
}

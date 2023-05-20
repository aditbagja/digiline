<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\transaksiDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    function index(){
        // $data = Auth::user()->transaksi::get();
        // $transaksi = Auth::user();
        $transaksis = transaksi::get();
        $transaksi_detail = transaksiDetail::get();
        return view("home/riwayat/index",compact('transaksis','transaksi_detail'));
    }
}

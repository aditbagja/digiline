<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KirimController extends Controller
{
    // Kirim Saldo
    function index(){
        return view("home/kirim/index");
    }
    function tujuan(){
        return view("home/kirim/tujuan");
    }
    function jumlahtrf(){
        return view("home/kirim/jumlahtrf");
    }
    function rinciantrf(){
        return view("home/kirim/rinciantrf");
    }
    function metodebayar(){
        return view("home/kirim/metodebayar");
    }
    function sukses(){
        return view("home/kirim/sukses");
    }
}

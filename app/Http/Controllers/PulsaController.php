<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PulsaController extends Controller
{
    function index(){
        return view("home/pulsa/index");
    }

    function pembayaran(){
        return view("home/pulsa/pembayaran");
    }
    function rincian(){
        return view("home/pulsa/rincian");
    }
}

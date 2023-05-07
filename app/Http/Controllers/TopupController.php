<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopupController extends Controller
{
    function index(){
        return view("home/topup/index");
    }

    function dana(){
        return view("home/topup/wallet/dana");
    }
    function gopay(){
        return view("home/topup/wallet/gopay");
    }
    function ovo(){
        return view("home/topup/wallet/ovo");
    }
    function shopeepay(){
        return view("home/topup/wallet/shopeepay");
    }
    function bri(){
        return view("home/topup/bank/bri");
    }
    function mandiri(){
        return view("home/topup/bank/mandiri");
    }
    function bca(){
        return view("home/topup/bank/bca");
    }
    function bni(){
        return view("home/topup/bank/bni");
    }
    function other(){
        return view("home/topup/bank/other");
    }
    function agen(){
        return view("home/topup/agen");
    }
}

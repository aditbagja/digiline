<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksiDetail extends Model
{
    use HasFactory;

    protected $table = "transaksi_detail";

    public function transaksi(){
        return $this->belongsTo('App\Models\transaksi','transaksi_id','id');
    }

    public function wallet(){
        return $this->belongsTo('App\wallet','pembayaran','id');
    }
}

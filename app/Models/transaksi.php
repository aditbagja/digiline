<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    
    public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function wallet(){
        return $this->belongsTo('App\Models\wallet','wallet_id','id');
    }
    public function transaksiDetail(){
        return $this->belongsTo('App\Models\transaksiDetail','transaksi_id','id');
    }
}

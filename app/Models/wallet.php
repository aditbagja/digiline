<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'name'
    ];

    protected $table = "wallet";

    public function transaksi(){
        return $this->hasMany('App\Models\transaksi','wallet_id','id');
    }

    public function transaksiDetail(){
        return $this->hasMany('App\Models\transaksiDetail','wallet_id','id');
    }
}

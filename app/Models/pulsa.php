<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pulsa extends Model
{
    use HasFactory;

    protected $fillable = [
        'varian',
        'harga',
        'keterangan'
    ];

    protected $table = "pulsa";

    public function transaksiDetail(){
        return $this->hasMany('App\Models\transaksiDetail','pulsa_id','id');
    }
}

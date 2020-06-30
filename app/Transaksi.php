<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    public $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'tgl_transaksi',
        'id_konsumen',
        'waktu_masuk',
        'waktu_masuk',
        'biaya'       
    ];

    public function konsumen()
    {
        //return $this->belongsTo('App\Konsumen');
        return $this->belongsTo('Konsumen::class');
    }

}


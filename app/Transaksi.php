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
        'waktu_masuk',
        'waktu_masuk',
        'biaya'       
    ];

    public function transaksi()
    {
        return $this->belongsTo(Konsumen::class);
    }

}


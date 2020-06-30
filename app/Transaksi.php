<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    public $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'nip',
        'nama_konsumen',
        'alamat'       
    ];

    public function transaksi()
    {
        return $this->belongsTo(Konsumen::class);
    }

}


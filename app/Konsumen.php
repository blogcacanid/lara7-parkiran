<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    //
    public $table = 'konsumen';
    protected $primaryKey = 'id_konsumen';
    protected $fillable = [
        'nama_konsumen',
        'jenis_kendaraan',
        'no_polisi',
        'tgl_lahir',
        'kelamin',
        'no_hp'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

}

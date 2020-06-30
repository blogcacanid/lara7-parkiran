<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //

    public function konsumen()
    {
        return $this->belongsTo(Konsume::class);
    }

}


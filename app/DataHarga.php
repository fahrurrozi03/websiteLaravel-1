<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataHarga extends Model
{
	protected $table = 'harga';
    protected $fillable = ['nama_layanan', 'min', 'max', 'harga1k', 'keterangan'];
}

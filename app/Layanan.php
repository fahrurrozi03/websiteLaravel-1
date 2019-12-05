<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
	protected $table = 'layanan';
    protected $fillable = ['sosmed','nama_layanan', 'min', 'max', 'harga1k', 'keterangan'];
}

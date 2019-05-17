<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['email', 'nama', 'alamat', 'telepon', 'kode_trans'];
    public $timestamps = false;
}

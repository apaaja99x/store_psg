<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = ['name','description','price','stock','category','size'];
    public $timestamps = false;
}
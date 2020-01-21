<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['tipe', 'merek', 'plate', 'tahun', 'harga', 'file'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = ['nim','nama','jurusan','fakultas','alamat'];
}

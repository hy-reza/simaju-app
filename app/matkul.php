<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    protected $fillable = ['nim','nama','jurusan','fakultas','alamat'];
}

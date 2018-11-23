<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table ='mahasiswa';
    public $timestamps = false;
    protected $fillable = ['id', 'nim', 'nama'];
}

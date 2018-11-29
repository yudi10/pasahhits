<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = ['name','sub_name','sub_sub_name'];
}

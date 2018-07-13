<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = "config";
    public $rules = array('image' => 'mimes:ico,jpeg,jpg,png,gif|required|max:20000',);
}

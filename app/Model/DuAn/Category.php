<?php

namespace App\Model\DuAn;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "nhom_du_an";
    public function du_an()
    {
    	return $this->hasMany('App\Model\DuAn\DuAn','cate_id','id');
    }
}

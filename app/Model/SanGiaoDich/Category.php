<?php

namespace App\Model\SanGiaoDich;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "nhom_san-giao-dich";
    public function sangiaodich()
    {
    	return $this->hasMany('App\Model\DuAn\SanGiaoDich\SanGiaoDich','cate_id','id');
    }
}

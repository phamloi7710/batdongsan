<?php

namespace App\Model\SanGiaoDich;

use Illuminate\Database\Eloquent\Model;

class SanGiaoDich extends Model
{
     protected $table = "san-giao-dich";
    public $rules = array('image' => 'mimes:jpeg,jpg,png,gif|required|max:20000',); //mimes:jpeg,bmp,png and for max size
    public function danhmuc()
    {
    	return $this -> belongsTo('App\Model\SanGiaoDich\Category','cate_id','id');
	}
}

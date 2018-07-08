<?php

namespace App\Model\SanGiaoDich;

use Illuminate\Database\Eloquent\Model;

class SanGiaoDich extends Model
{
     protected $table = "san_giao_dich";
    public $rules = array('image' => 'mimes:jpeg,jpg,png,gif|required|max:20000',); //mimes:jpeg,bmp,png and for max size
    public function category()
    {
    	return $this -> belongsTo('App\Model\SanGiaoDich\Category','cate_id','id');
	}
}

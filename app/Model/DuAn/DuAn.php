<?php

namespace App\Model\DuAn;

use Illuminate\Database\Eloquent\Model;

class DuAn extends Model
{
    protected $table = "du_an";
    public $rules = array('image' => 'mimes:jpeg,jpg,png,gif|required|max:20000',); //mimes:jpeg,bmp,png and for max size
    public function danhmuc()
    {
    	return $this -> belongsTo('App\Model\DuAn\Category','cate_id','id');
	}
	public function tinh()
    {
    	return $this -> belongsTo('App\Model\Province','provinceid','provinceid');
	}
}

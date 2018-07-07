<?php

namespace App\Model\News;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    public $rules = array('image' => 'mimes:jpeg,jpg,png,gif|required|max:20000',);
    public function category()
    {
    	return $this -> belongsTo('App\Model\News\Category','cate_id','id');
	}
	public function user()
    {
    	return $this -> belongsTo('App\User','user_id','id');
	}
}

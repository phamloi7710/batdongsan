<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = "province";
    public function duan()
    {
    	return $this->hasMany('App\Model\DuAn\DuAn','provinceid','provinceid');
    }
}

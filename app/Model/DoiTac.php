<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DoiTac extends Model
{
   protected $table = "doi_tac";
   public $rules = array('image' => 'mimes:jpeg,jpg,png,gif|required|max:20000');
}

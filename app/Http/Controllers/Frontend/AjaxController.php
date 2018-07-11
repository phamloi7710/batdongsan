<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Province;
use App\Model\District;
class AjaxController extends Controller
{
    public function getDistrict($province_id)
    {
    	$districts = District::where('provinceid',$province_id)->get();
    	echo "<option value=''>Tất Cả</option>";
    	foreach($districts as $value)
    	{

    		echo "<option value='".$value->districtid."'>".$value->type." ".$value->name."</option>";
    	}
    }
}

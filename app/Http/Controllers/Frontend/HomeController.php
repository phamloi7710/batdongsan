<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DuAn\Category;
use App\Model\DuAn\DuAn;
use App\Model\SanGiaoDich\Category as Cate;
use App\Model\SanGiaoDich\SanGiaoDich;
class HomeController extends Controller
{
    public function getIndexFrontend()
    {
    	$duanmoi = DuAn::where('status','active')->where('new','true')->get();
    	$duan = DuAn::where('status','active')->get();
    	return view('frontend.index',['duanmoi'=>$duanmoi, 'duan'=>$duan]);
    }
}

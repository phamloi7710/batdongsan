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
<<<<<<< HEAD
    	$sangiaodichnoibat = SanGiaoDich::where('status', 'active')->where('noibat','true')->get();
    	return view('frontend.index',['duanmoi'=>$duanmoi, 'duan'=>$duan, 'sangiaodichnoibat'=>$sangiaodichnoibat]);
=======
    	return view('frontend.index',['duanmoi'=>$duanmoi, 'duan'=>$duan]);
>>>>>>> 9b5541f1faff057a79a61baebe82f4844e650a98
    }
}

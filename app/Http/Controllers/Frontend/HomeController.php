<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DuAn\Category;
use App\Model\DuAn\DuAn;
use App\Model\News\News;
use App\Model\SanGiaoDich\Category as Cate;
use App\Model\SanGiaoDich\SanGiaoDich;
use App\Model\Province;
use App\Model\District;
class HomeController extends Controller
{
    public function getIndexFrontend()
    {
        $duanmoi = DuAn::where('status','active')->where('new','true')->get();
    	$news = News::where('status','active')->orderBy('sort','ASC');
        $news = $news->paginate(10);
    	$category = Category::where('status','active')->get();
    	$duan = DuAn::where('status','active')->get();
    	$tinh = Province::all();
    	$huyen = District::all();
    	$sangiaodichnoibat = SanGiaoDich::where('status', 'active')->where('noibat','true')->get();
    	return view('frontend.index',['category'=>$category, 'duanmoi'=>$duanmoi, 'news'=>$news, 'duan'=>$duan, 'sangiaodichnoibat'=>$sangiaodichnoibat, 'tinh'=>$tinh, 'huyen'=>$huyen]);
    }
}

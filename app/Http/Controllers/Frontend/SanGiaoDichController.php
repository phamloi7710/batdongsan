<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SanGiaoDich\Category;
use App\Model\SanGiaoDich\SanGiaoDich;
class SanGiaoDichController extends Controller
{
    public function getDetail($slug)
    {
        $sangiaodich = SanGiaoDich::where('slug', $slug)->first();
        $sangiaodichcategory = Category::all();
        return view('frontend.pages.chitietsangiaodich',['sangiaodich'=>$sangiaodich,'sangiaodichcategory'=>$sangiaodichcategory]);
    }
    public function getSanGiaoDich()
    {
        $sangiaodich = SanGiaoDich::where('status', 'active')->orderBy('sort','ASC')->get();
        $muaban = SanGiaoDich::where('status', 'active')->where('type','Mua Bán')->orderBy('sort','ASC')->get();
        $chothue = SanGiaoDich::where('status', 'active')->where('type','Cho Thuê')->orderBy('sort','ASC')->get();
        return view('frontend.pages.sangiaodich',['sangiaodich'=>$sangiaodich,'muaban'=>$muaban,'chothue'=>$chothue]);
    }
    public function getSanGiaoDichTheoDanhMuc($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $sangiaodich = SanGiaoDich::where('cate_id', $category->id)->where('status', 'active')->orderBy('sort','ASC')->get();
        $muaban = SanGiaoDich::where('cate_id', $category->id)->where('type','Mua Bán')->where('status', 'active')->orderBy('sort','ASC')->get();
        $chothue = SanGiaoDich::where('cate_id', $category->id)->where('type','Cho Thuê')->where('status', 'active')->orderBy('sort','ASC')->get();

        return view('frontend.pages.sangiaodichtheodanhmuc',['sangiaodich'=>$sangiaodich, 'muaban'=>$muaban,'chothue'=>$chothue,'category'=>$category]);
    }
}

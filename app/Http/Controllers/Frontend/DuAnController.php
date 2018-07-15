<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DuAn\Category;
use App\Model\DuAn\DuAn;
use App\Model\Province;
use App\Model\District;
use App\Model\Config;
use Illuminate\Support\Facades\Input;
class DuAnController extends Controller
{
	public function __construct()
	{
		$duan = DuAn::where('status','active')->orderBy('sort','ASC')->get();
        $danhmuc = Category::where('status', 'active')->get();
		$duannoibat = DuAn::where('status','active')->where('noibat','true')->orderBy('sort','ASC')->get();
        $province = Province::all();
        $district = District::all();
        $config = Config::where('id','>',0)->first();
        view()->share('duan', $duan);
		view()->share('danhmuc', $danhmuc);
        view()->share('duannoibat',$duannoibat);
        view()->share('province',$province);
        view()->share('district',$district);
		view()->share('config',$config);
	}
    public function getDetail($slug)
    {
        $duan = DuAn::where('slug', $slug)->first();
        return view('frontend.pages.chitietduan',['duan'=>$duan]);
    }
    public function getDuAn(Request $request)
    {
        $duan = DuAn::where('id','>',0);
        $province = $request->input('province');
        $district = $request->input('district');
        $category = $request->input('category');
        $type = $request->input('type');
        if ($province) {
            $duan->where('provinceid',$province);
        }
        if ($district) {
            $duan->where('districtid',$district);
        }
        if ($category) {
            $duan->where('cate_id',$category);
        }
        if ($type) {
            $duan->where('type',$type);
        }
        $duan = $duan->paginate(10)->appends($request->all());
    	return view('frontend.pages.duan',['duan'=>$duan]);
    }
}

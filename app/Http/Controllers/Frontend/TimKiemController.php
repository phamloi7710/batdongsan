<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DuAn\Category;
use App\Model\DuAn\DuAn;
use App\Model\Province;
use App\Model\District;
class TimKiemController extends Controller
{
    public function getDuAn(Request $request)
    {
    	$duan = DuAn::where('id','>',0);
    	$danhmuc = $request->danhmuc;
    	$loaigiaodich = $request->loaigiaodich;
    	$tinh = $request->tinh;
    	$huyen = $request->huyen;
    	if ($danhmuc) {
            $duan->where('cate_id',$danhmuc);
        }
        if ($loaigiaodich) {
            $duan->where('type',$loaigiaodich);
        }
        if ($tinh) {
            $duan->where('provinceid',$tinh);
        }
        if ($huyen) {
            $duan->where('districtid',$huyen);
        }
        $duan = $duan->paginate(15)->appends($request->all())->setPath('');
    	return view('frontend.pages.timkiemduan',['duan'=>$duan]);
    }
}

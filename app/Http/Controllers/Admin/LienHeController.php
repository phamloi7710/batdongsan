<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\LienHe;
class LienHeController extends Controller
{
    public function getList()
    {
    	$lienhe = LienHe::where('id','>', 0)->orderBy('status','DASC');
    	$lienhe = $lienhe->paginate(20)->setPath('');
    	return view('admin.pages.lienhe.list',['lienhe'=>$lienhe]);
    }
    public function postEdit(Request $request, $id)
    {
    	$lienhe = LienHe::find($id);
        $lienhe->status = $request->sltstatus;
        $lienhe->note = $request->note;
        $lienhe->save();
    	return redirect()->route('getListLienHe')->with('success','Cập nhật thành công');
    }
}

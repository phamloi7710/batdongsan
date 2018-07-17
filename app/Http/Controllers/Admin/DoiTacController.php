<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DoiTac;
use Illuminate\Support\Facades\Input;
use Session;
use Validator;
class DoiTacController extends Controller
{
   	public function getList()
   	{
   		$doitac = DoiTac::all();
   		return view('admin.pages.doitac.list',['doitac'=>$doitac]);
   	}
   	public function getAdd()
   	{
   		return view('admin.pages.doitac.add');
   	}
   	public function postAdd(Request $request)
   	{
   		$doitac = new DoiTac;
   		$doitac->title = $request->txtTitle;
   		$doitac->url = $request->txtUrl;
   		if($request->hasFile('image')) {
            $rules = $doitac->rules;
            $file = array('image' => Input::file('image'));
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                Session::flash('error', 'Cho phép tệp định dạng tải lên: .jpeg, .bmp, .png và cho kích thước tối đa tối đa: 20000 Kb');
                return redirect()->back();
            } else {
                if (Input::file('image')->isValid()) {
                    $destinationPath = 'uploads/doi-tac';
                    $extension = Input::file('image')->getClientOriginalExtension();
                    $fileName = time() . rand(11111, 99999) . '.' . $extension;
                    Input::file('image')->move($destinationPath, $fileName);
                    $doitac->image = $fileName;
                } else {
                    Session::flash('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                    return redirect()->back()->witch('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                }
            }
        }
   		$doitac->status = $request->status;
   		$doitac->save();
   		return redirect()->route('getListDoiTac')->with('success','Thêm Mới Đối Tác Thành Công!');
   	}
   	public function getEdit($id)
   	{
   		$doitac = DoiTac::find($id);
   		return view('admin.pages.doitac.edit',['doitac'=>$doitac]);
   	}
   	public function postEdit(Request $request,$id)
   	{
   		$doitac = DoiTac::find($id);
   		$doitac->title = $request->txtTitle;
   		$doitac->url = $request->txtUrl;
   		if($request->hasFile('image')) {
            $rules = $doitac->rules;
            $file = array('image' => Input::file('image'));
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                Session::flash('error', 'Cho phép tệp định dạng tải lên: .jpeg, .bmp, .png và cho kích thước tối đa tối đa: 20000 Kb');
                return redirect()->back();
            } else {
                if (Input::file('image')->isValid()) {
                    $destinationPath = 'uploads/doi-tac';
                    $extension = Input::file('image')->getClientOriginalExtension();
                    $fileName = time() . rand(11111, 99999) . '.' . $extension;
                    Input::file('image')->move($destinationPath, $fileName);
                    $doitac->image = $fileName;
                } else {
                    Session::flash('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                    return redirect()->back()->with('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                }
            }
        }
   		$doitac->status = $request->status;
   		$doitac->save();
   		return redirect()->route('getListDoiTac')->with('success','Cập Nhật Đối Tác Thành Công!');
   	}
   		public function getXoa($id)
   	{
   		$doitac = DoiTac::find($id);
   		$doitac->delete();
   		return redirect()->route('getListDoiTac')->with('success', 'Xoá Thành Công Đối Tác!');
   	}
}

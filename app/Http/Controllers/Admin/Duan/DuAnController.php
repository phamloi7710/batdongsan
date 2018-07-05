<?php

namespace App\Http\Controllers\Admin\Duan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DuAn\Category;
use App\Model\DuAn\DuAn;
use Illuminate\Support\Facades\Input;
use Session;
use Validator;
class DuAnController extends Controller
{
    public function getListDanhMucDuAn()
    {
        $categories = Category::all();
    	return view('admin.pages.duan.danhmuc.list',['categories'=>$categories]);
    }
    public function getAddDanhMucDuAn()
    {
        return view('admin.pages.duan.danhmuc.add');
    }
    public function postAddDanhMucDuAn(Request $request)
    {
        $category = new Category();
        $category->title = $request->txtTitle;
        $category->slug = changeTitle($request->txtTitle);
        $category->description = $request->description;
        $category->sort = $request->txtSort;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('getListDanhMucDuAn')->with('success','Thêm Mới Danh Mục Thành Công!');
    }
    public function getEditDanhMucDuAn($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.pages.duan.danhmuc.edit',['category'=>$category]);
    }
    public function postEditDanhMucDuAn(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->title = $request->txtTitle;
        $category->slug = changeTitle($request->txtTitle);
        $category->description = $request->description;
        $category->sort = $request->txtSort;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('getListDanhMucDuAn')->with('success','Sửa Danh Mục Thành Công!');
    }
    public function getDeleteDanhMucDuAn($id)
    {
        $category = Category::find($id);
        $category->delete();
         return redirect()->route('getListDanhMucDuAn')->with('success','Xoá Danh Mục Thành Công!');
    }
    public function getListDuAn()
    {
        $duan = DuAn::all();
        return view('admin.pages.duan.list',['duan'=>$duan]);
    }
    public function getAddDuAn()
    {
        $categories = Category::all();
        return view('admin.pages.duan.add',['categories'=>$categories]);
    }
    public function postAddDuAn(Request $request)
    {
        $duan = new DuAn();
        $duan->title = $request->txtTitle;
        $duan->slug = changeTitle($request->txtTitle);
        $duan->cate_id = $request->sltCate;
        if ($request->hasFile('image')) {
            $rules = $duan->rules;
            $file = array('image' => Input::file('image'));
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                // send back to the page with the input data and errors
                Session::flash('error', Lang::get('course.checkMineImageWaring'));
                return redirect()->back();
            } else {

                // checking file is valid.
                if (Input::file('image')->isValid()) {
                    $destinationPath = 'uploads/du-an'; // upload path
                    $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                    $fileName = time() . rand(11111, 99999) . '.' . $extension; // renameing image
                    Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                    $duan->image = $fileName;
                } else {
                    // sending back with error message.
                    Session::flash('error', Lang::get('page.waringUploadImage'));
                    return redirect()->back()->witch('error', Lang::get('page.waringUploadImage'));
                }
            }
        }
        $duan->summary = $request->summary;
        $duan->description = $request->description;
        $duan->sort = $request->txtSort;
        $duan->status = $request->status;
        $dataSEO = [
            'title' => $request->txtSeoTitle,
            'description' => $request->txtSeoDescription,
            'keywords' => $request->txtSeoKeywords,
        ];
        $duan->SEO = serialize($dataSEO);
        $duan->save();
        return redirect()->route('getListDuAn')->with('success','Thêm Mới Dự Án Thành Công!');
    }
    public function getEditDuAn($slug)
    {
        $categories = Category::all();
        $duan = DuAn::where('slug', $slug)->first();
        $dataSEO = unserialize($duan->SEO);
        return view('admin.pages.duan.edit',['categories'=>$categories, 'duan'=>$duan,'dataSEO'=>$dataSEO]);
    }
    public function postEditDuAn(Request $request, $slug)
    {
        $duan = DuAn::where('slug', $slug)->first();
        $duan->title = $request->txtTitle;
        $duan->slug = changeTitle($request->txtTitle);
        $duan->cate_id = $request->sltCate;
        if ($request->hasFile('image')) {
            $rules = $duan->rules;
            $file = array('image' => Input::file('image'));
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                // send back to the page with the input data and errors
                Session::flash('error', Lang::get('course.checkMineImageWaring'));
                return redirect()->back();
            } else {

                // checking file is valid.
                if (Input::file('image')->isValid()) {
                    $destinationPath = 'uploads/du-an'; // upload path
                    $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                    $fileName = time() . rand(11111, 99999) . '.' . $extension; // renameing image
                    Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                    $duan->image = $fileName;
                } else {
                    // sending back with error message.
                    Session::flash('error', Lang::get('page.waringUploadImage'));
                    return redirect()->back()->witch('error', Lang::get('page.waringUploadImage'));
                }
            }
        }
        $duan->summary = $request->summary;
        $duan->description = $request->description;
        $duan->sort = $request->txtSort;
        $duan->status = $request->status;
        $dataSEO = [
            'title' => $request->txtSeoTitle,
            'description' => $request->txtSeoDescription,
            'keywords' => $request->txtSeoKeywords,
        ];
        $duan->SEO = serialize($dataSEO);
        $duan->save();
        return redirect()->route('getListDuAn')->with('success','Cập Nhật Dự Án Thành Công!');
    }
    public function getDeleteDuAn($id)
    {
        $duan = DuAn::find($id);
        $duan->delete();
         return redirect()->route('getListDuAn')->with('success','Xoá Dự Án Thành Công!');
    }
}

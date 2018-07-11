<?php

namespace App\Http\Controllers\Admin\DuAn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SanGiaoDich\Category;
use App\Model\SanGiaoDich\SanGiaoDich;
use Illuminate\Support\Facades\Input;
use Session;
use Validator;
class SanGiaoDichController extends Controller
{
    public function getListDanhMucSanGiaoDich()
    {
        $categories = Category::all();
    	return view('admin.pages.duan.sangiaodich.danhmuc.list',['categories'=>$categories]);
    }
    public function getAddDanhMucSanGiaoDich()
    {
        return view('admin.pages.duan.sangiaodich.danhmuc.add');
    }
    public function postAddDanhMucSanGiaoDich(Request $request)
    {
        $category = new Category();
        $category->title = $request->txtTitle;
        $category->slug = changeTitle($request->txtTitle);
        $category->description = $request->description;
        $category->sort = $request->txtSort;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('getListDanhMucSanGiaoDich')->with('success','Thêm Mới Danh Mục Thành Công!');
    }
    public function getEditDanhMucSanGiaoDich($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.pages.duan.sangiaodich.danhmuc.edit',['category'=>$category]);
    }
    public function postEditDanhMucSanGiaoDich(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->title = $request->txtTitle;
        $category->slug = changeTitle($request->txtTitle);
        $category->description = $request->description;
        $category->sort = $request->txtSort;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('getListDanhMucSanGiaoDich')->with('success','Sửa Danh Mục Thành Công!');
    }
    public function getDeleteDanhMucSanGiaoDich($id)
    {
        $sangiaodich = SanGiaoDich::where('cate_id',$id)->count();
        if ($sangiaodich==0) {
            $category = Category::find($id);
            $category->delete();
            return redirect()->route('getListDanhMucSanGiaoDich')->with('success','Xoá Danh Mục Thành Công!');
        }
        else{
            return redirect()->route('getListDanhMucSanGiaoDich')->with('error','Không Thể Xoá. Danh Muc Này Đang Chứa Sàn Giao Dịch!');
        }
    }
    public function getListSanGiaoDich()
    {
        $sangiaodich = SanGiaoDich::all();
        return view('admin.pages.duan.sangiaodich.list',['sangiaodich'=>$sangiaodich]);
    }
    public function getAddSanGiaoDich()
    {
        $categories = Category::all();
        return view('admin.pages.duan.sangiaodich.add',['categories'=>$categories]);
    }
    public function postAddSanGiaoDich(Request $request)
    {
        $sangiaodich = new SanGiaoDich();
        $sangiaodich->title = $request->txtTitle;
        $sangiaodich->slug = changeTitle($request->txtTitle);
        $sangiaodich->cate_id = $request->sltCate;
        if($request->hasFile('image')) {
            $rules = $sangiaodich->rules;
            $file = array('image' => Input::file('image'));
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                Session::flash('error', Lang::get('slider.checkMineImageWaring'));
                return redirect()->back();
            } else {
                if (Input::file('image')->isValid()) {
                    $destinationPath = 'uploads/san-giao-dich';
                    $extension = Input::file('image')->getClientOriginalExtension();
                    $fileName = time() . rand(11111, 99999) . '.' . $extension;
                    Input::file('image')->move($destinationPath, $fileName);
                    $sangiaodich->image = $fileName;
                } else {
                    Session::flash('error', Lang::get('page.waringUploadImage'));
                    return redirect()->back()->witch('error', Lang::get('slider.waringUploadImage'));
                }
            }
        }
        $sangiaodich->userPostAddress = $request->txtUserPostAddress;
        $sangiaodich->userPostPhone = $request->txtUserPostPhone;
        $sangiaodich->userPostEmail = $request->txtUserPostEmail;
        $sangiaodich->userPostName = $request->txtUserPostName;
        $sangiaodich->price = $request->txtPrice;
        $sangiaodich->room = $request->txtRoom;
        $sangiaodich->area = $request->sltArea;
        $sangiaodich->address = $request->txtAddress;
        $sangiaodich->type = $request->sltType;
        $sangiaodich->summary = $request->summary;
        $sangiaodich->description = $request->description;
        $sangiaodich->sort = $request->txtSort;
        $sangiaodich->status = $request->status;
        if($request->hot==null){
            $sangiaodich->hot = 'false';
        }
        else{
            $sangiaodich->hot = $request->hot;
        }
        if($request->new==null){
            $sangiaodich->new = 'false';
        }
        else{
            $sangiaodich->new = $request->new;
        }
        if($request->noibat==null){
            $sangiaodich->noibat = 'false';
        }
        else{
            $sangiaodich->noibat = $request->noibat;
        }
        $dataSEO = [
            'title' => $request->txtSeoTitle,
            'description' => $request->txtSeoDescription,
            'keywords' => $request->txtSeoKeywords,
        ];
        $sangiaodich->SEO = serialize($dataSEO);
        $sangiaodich->save();
        return redirect()->route('getListSanGiaoDich')->with('success','Thêm Mới Sàn Giao Dịch Thành Công!');
    }
    public function getEditSanGiaoDich($slug)
    {
        $categories = Category::all();
        $sangiaodich = SanGiaoDich::where('slug', $slug)->first();
        $dataSEO = unserialize($sangiaodich->SEO);
        return view('admin.pages.duan.sangiaodich.edit',['categories'=>$categories, 'sangiaodich'=>$sangiaodich,'dataSEO'=>$dataSEO]);
    }
    public function postEditSanGiaoDich(Request $request, $slug)
    {
        $sangiaodich = SanGiaoDich::where('slug', $slug)->first();
        $sangiaodich->title = $request->txtTitle;
        $sangiaodich->slug = changeTitle($request->txtTitle);
        $sangiaodich->cate_id = $request->sltCate;
        if($request->hasFile('image')) {
            $rules = $sangiaodich->rules;
            $file = array('image' => Input::file('image'));
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                Session::flash('error', Lang::get('slider.checkMineImageWaring'));
                return redirect()->back();
            } else {
                if (Input::file('image')->isValid()) {
                    $destinationPath = 'uploads/san-giao-dich';
                    $extension = Input::file('image')->getClientOriginalExtension();
                    $fileName = time() . rand(11111, 99999) . '.' . $extension;
                    Input::file('image')->move($destinationPath, $fileName);
                    $sangiaodich->image = $fileName;
                } else {
                    Session::flash('error', Lang::get('page.waringUploadImage'));
                    return redirect()->back()->witch('error', Lang::get('slider.waringUploadImage'));
                }
            }
        }
        $sangiaodich->userPostAddress = $request->txtUserPostAddress;
        $sangiaodich->userPostPhone = $request->txtUserPostPhone;
        $sangiaodich->userPostEmail = $request->txtUserPostEmail;
        $sangiaodich->userPostName = $request->txtUserPostName;
        $sangiaodich->price = $request->txtPrice;
        $sangiaodich->room = $request->txtRoom;
        $sangiaodich->area = $request->sltArea;
        $sangiaodich->address = $request->txtAddress;
        $sangiaodich->type = $request->sltType;
        $sangiaodich->summary = $request->summary;
        $sangiaodich->description = $request->description;
        $sangiaodich->sort = $request->txtSort;
        $sangiaodich->status = $request->status;
        if($request->hot==null){
            $sangiaodich->hot = 'false';
        }
        else{
            $sangiaodich->hot = $request->hot;
        }
        if($request->new==null){
            $sangiaodich->new = 'false';
        }
        else{
            $sangiaodich->new = $request->new;
        }
        if($request->noibat==null){
            $sangiaodich->noibat = 'false';
        }
        else{
            $sangiaodich->noibat = $request->noibat;
        }
        $dataSEO = [
            'title' => $request->txtSeoTitle,
            'description' => $request->txtSeoDescription,
            'keywords' => $request->txtSeoKeywords,
        ];
        $sangiaodich->SEO = serialize($dataSEO);
        $sangiaodich->save();
        return redirect()->route('getListSanGiaoDich')->with('success','Cập Nhật Sàn Giao Dịch Thành Công!');
    }
    public function getDeleteSanGiaoDich($id)
    {
        $sangiaodich = SanGiaoDich::find($id);
        $sangiaodich->delete();
         return redirect()->route('getListSanGiaoDich')->with('success','Xoá Sàn Giao Dịch Thành Công!');
    }
}

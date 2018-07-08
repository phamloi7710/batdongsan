<?php

namespace App\Http\Controllers\Admin\Duan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DuAn\Category;
use App\Model\DuAn\DuAn;
class DuAnController extends Controller
{
    public function getListDanhMucDuAn()
    {
        $categories = Category::all();
    	return view('admin.pages.duan.duan.danhmuc.list',['categories'=>$categories]);
    }
    public function getAddDanhMucDuAn()
    {
        return view('admin.pages.duan.duan.danhmuc.add');
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
        return view('admin.pages.duan.duan.danhmuc.edit',['category'=>$category]);
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
         $duan = DuAn::where('cate_id',$id)->count();
        if ($duan==0) {
            $category = Category::find($id);
            $category->delete();
            return redirect()->route('getListDanhMucDuAn')->with('success','Xoá Danh Mục Thành Công!');
        }
        else{
            return redirect()->route('getListDanhMucDuAn')->with('error','Không Thể Xoá. Danh Muc Này Đang Chứa Dự Án!');
        }
    }
    public function getListDuAn()
    {
        $duan = DuAn::all();
        return view('admin.pages.duan.duan.list',['duan'=>$duan]);
    }
    public function getAddDuAn()
    {
        $categories = Category::all();
        return view('admin.pages.duan.duan.add',['categories'=>$categories]);
    }
    public function postAddDuAn(Request $request)
    {
        $duan = new DuAn();
        $duan->title = $request->txtTitle;
        $duan->slug = changeTitle($request->txtTitle);
        $duan->cate_id = $request->sltCate;
        $duan->image = $request->image;
        $duan->summary = $request->summary;
        $duan->description = $request->description;
        $duan->sort = $request->txtSort;
        $duan->status = $request->status;
        if($request->hot==null){
            $duan->hot = 'false';
        }
        else{
            $duan->hot = $request->hot;
        }
        if($request->new==null){
            $duan->new = 'false';
        }
        else{
            $duan->new = $request->new;
        }
        if($request->noibat==null){
            $duan->noibat = 'false';
        }
        else{
            $duan->noibat = $request->noibat;
        }
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
        return view('admin.pages.duan.duan.edit',['categories'=>$categories, 'duan'=>$duan,'dataSEO'=>$dataSEO]);
    }
    public function postEditDuAn(Request $request, $slug)
    {
        $duan = DuAn::where('slug', $slug)->first();
        $duan->title = $request->txtTitle;
        $duan->slug = changeTitle($request->txtTitle);
        $duan->cate_id = $request->sltCate;
        $duan->image = $request->image;
        $duan->summary = $request->summary;
        $duan->description = $request->description;
        $duan->sort = $request->txtSort;
        if($request->hot==null){
            $duan->hot = 'false';
        }
        else{
            $duan->hot = $request->hot;
        }
        if($request->new==null){
            $duan->new = 'false';
        }
        else{
            $duan->new = $request->new;
        }
        if($request->noibat==null){
            $duan->noibat = 'false';
        }
        else{
            $duan->noibat = $request->noibat;
        }
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

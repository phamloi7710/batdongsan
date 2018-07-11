<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News\Category;
use App\Model\News\News;
use Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Validator;
class NewsController extends Controller
{
	public function __construct()
	{
		$categories = Category::all();
		$news = News::all();
		view()->share('categories', $categories);
		view()->share('news', $news);
	}
    public function getlistNewsCategories()
    {
    	return view('admin.pages.news.category.list');
    }
    public function getAddNewsCategories()
    {
    	return view('admin.pages.news.category.add');
    }
    public function postAddNewsCategories(Request $request)
    {
        $category = new Category();
        $category->title = $request->txtTitle;
        $category->slug = changeTitle($request->txtTitle);
        $category->description = $request->description;
        $category->sort = $request->txtSort;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('getlistNewsCategories')->with('success','Thêm Mới Danh Mục Thành Công!');
    }
    public function getEditNewsCategories($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.pages.news.category.edit',['category'=>$category]);
    }
    public function postEditNewsCategories(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->title = $request->txtTitle;
        $category->slug = changeTitle($request->txtTitle);
        $category->description = $request->description;
        $category->sort = $request->txtSort;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('getlistNewsCategories')->with('success','Sửa Danh Mục Thành Công!');
    }
    public function getDeleteNewsCategories($id)
    {
        $news = DuAn::where('cate_id',$id)->count();
        if ($news==0) {
            $category = Category::find($id);
            $category->delete();
            return redirect()->route('getlistNewsCategories')->with('success','Xoá Danh Mục Thành Công!');
        }
        else{
            return redirect()->route('getlistNewsCategories')->with('error','Không Thể Xoá. Danh Muc Này Đang Chứa Tin Tức!');
        }
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('getlistNewsCategories')->with('success','Xoá Danh Mục Thành Công!');
    }
    public function getlistNews()
    {
    	return view('admin.pages.news.list');
    }
    public function getAddNews()
    {
    	return view('admin.pages.news.add');
    }
    public function postAddNews(Request $request)
    {
    	$news = new News();
        $news->title = $request->txtTitle;
        $news->slug = changeTitle($request->txtTitle);
        $news->cate_id = $request->sltCate;
        $news->user_id = Auth::user()->id;
        $news->summary = $request->summary;
        if($request->hasFile('image')) {
            $rules = $news->rules;
            $file = array('image' => Input::file('image'));
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                Session::flash('error', Lang::get('slider.checkMineImageWaring'));
                return redirect()->back();
            } else {
                if (Input::file('image')->isValid()) {
                    $destinationPath = 'uploads/tin-tuc';
                    $extension = Input::file('image')->getClientOriginalExtension();
                    $fileName = time() . rand(11111, 99999) . '.' . $extension;
                    Input::file('image')->move($destinationPath, $fileName);
                    $news->image = $fileName;
                } else {
                    Session::flash('error', Lang::get('page.waringUploadImage'));
                    return redirect()->back()->witch('error', Lang::get('slider.waringUploadImage'));
                }
            }
        }
        $news->description = $request->description;
        $news->sort = $request->txtSort;
        $news->status = $request->status;
        if($request->hot==null){
            $news->hot = 'false';
        }
        else{
            $news->hot = $request->hot;
        }
        if($request->new==null){
            $news->new = 'false';
        }
        else{
            $news->new = $request->new;
        }
        if($request->noibat==null){
            $news->noibat = 'false';
        }
        else{
            $news->noibat = $request->noibat;
        }
        $dataSEO = [
            'title' => $request->txtSeoTitle,
            'description' => $request->txtSeoDescription,
            'keywords' => $request->txtSeoKeywords,
        ];
        $news->SEO = serialize($dataSEO);
        $news->save();
        return redirect()->route('getlistNews')->with('success','Thêm Mới Dự Án Thành Công!');
    }
    public function getEditNews($slug)
    {
        $news = News::where('slug', $slug)->first();
        $dataSEO = unserialize($news->SEO);
        return view('admin.pages.news.edit',['news'=>$news,'dataSEO'=>$dataSEO]);
    }
    public function postEditNews(Request $request, $slug)
    {
        $news = News::where('slug', $slug)->first();
        $news->title = $request->txtTitle;
        $news->slug = changeTitle($request->txtTitle);
        $news->cate_id = $request->sltCate;
        $news->user_id = Auth::user()->id;
        $news->summary = $request->summary;
        if($request->hasFile('image')) {
            $rules = $news->rules;
            $file = array('image' => Input::file('image'));
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                Session::flash('error', Lang::get('slider.checkMineImageWaring'));
                return redirect()->back();
            } else {
                if (Input::file('image')->isValid()) {
                    $destinationPath = 'uploads/tin-tuc';
                    $extension = Input::file('image')->getClientOriginalExtension();
                    $fileName = time() . rand(11111, 99999) . '.' . $extension;
                    Input::file('image')->move($destinationPath, $fileName);
                    $news->image = $fileName;
                } else {
                    Session::flash('error', Lang::get('page.waringUploadImage'));
                    return redirect()->back()->witch('error', Lang::get('slider.waringUploadImage'));
                }
            }
        }
        $news->description = $request->description;
        $news->sort = $request->txtSort;
        $news->status = $request->status;
        if($request->hot==null){
            $news->hot = 'false';
        }
        else{
            $news->hot = $request->hot;
        }
        if($request->new==null){
            $news->new = 'false';
        }
        else{
            $news->new = $request->new;
        }
        if($request->noibat==null){
            $news->noibat = 'false';
        }
        else{
            $news->noibat = $request->noibat;
        }
        $dataSEO = [
            'title' => $request->txtSeoTitle,
            'description' => $request->txtSeoDescription,
            'keywords' => $request->txtSeoKeywords,
        ];
        $news->SEO = serialize($dataSEO);
        $news->save();
        return redirect()->route('getlistNews')->with('success','Cập Nhật Tin Tức Thành Công!');
    }
    public function getDeleteNews($id)
    {
        $news = News::find($id);
        $news->delete();
         return redirect()->route('getlistNews')->with('success','Xoá Tin Tức Thành Công!');
    }
}

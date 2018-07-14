<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News\Category;
use App\Model\News\News;
use App\Model\Config;
class TinTucController extends Controller
{
	public function __construct()
	{
		$news = News::where('status','active')->orderBy('sort','ASC')->get();
    	$category = Category::where('status','active')->orderBy('sort','ASC')->get();
    	$noibat = News::where('status','active')->where('noibat','true')->orderBy('sort','ASC')->get();
        $config = Config::where('id','>',0)->first();       
        view()->share('config',$config);
    	view()->share('news',$news);
    	view()->share('category',$category);
    	view()->share('noibat',$noibat);
	}
    public function getNews()
    {
    	return view('frontend.pages.tintuc');
    }
    public function getDetail($slug)
    {
    	$newsDetail = News::where('slug',$slug)->first();
    	$categoryNews = Category::where('slug', $newsDetail->category->slug)->first();
    	return view('frontend.pages.chitiettintuc',['newsDetail'=>$newsDetail,'categoryNews'=>$categoryNews, ]);
    }
    public function getNewsCategory($slug)
    {
    	$categoryNews = Category::where('slug', $slug)->first();
    	$newsCate = News::where('cate_id', $categoryNews->id)->where('status', 'active')->orderBy('sort','ASC')->get();
    	return view('frontend.pages.tintuctheodanhmuc',['newsCate'=>$newsCate,'categoryNews'=>$categoryNews]);
    }
}

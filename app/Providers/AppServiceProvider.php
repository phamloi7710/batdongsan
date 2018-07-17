<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Model\SanGiaoDich\Category;
use App\Model\Config;
use App\Model\MangXaHoi;
use App\Model\DoiTac;
use App\Model\DuAn\DuAn;
use App\Model\News\News;
use App\Model\SanGiaoDich\SanGiaoDich;
use View;
use DB;
use Lang;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        if(Schema::hasTable('san_giao_dich'))
        {
            $sangiaodichcategory = Category::where('status','active')->orderBy('sort','ASC')->get();
            View::composer('frontend.general.danhmucsangiaodich', function($view) use($sangiaodichcategory) {
                $view->with('sangiaodichcategory',$sangiaodichcategory);
            });
        }
        if(Schema::hasTable('news'))
        {
            $news = News::where('status','active')->orderBy('sort','ASC')->limit(5)->get();
            View::composer('frontend.general.footer', function($view) use($news) {
                $view->with('news',$news);
            });
        }
        if(Schema::hasTable('config'))
        {
            $config = Config::where('id','>',0)->first();
            View::composer('frontend.index', function($view) use($config) {
                $view->with('config',$config);
            });
            View::composer('frontend.general.header', function($view) use($config) {
                $view->with('config',$config);
            });
             View::composer('frontend.general.footer', function($view) use($config) {
                $view->with('config',$config);
            });
        }
        if(Schema::hasTable('mang_xa_hoi'))
        {
            $mangxahoi = MangXaHoi::where('id','>',0)->first();
            View::composer('frontend.general.header', function($view) use($mangxahoi) {
                $view->with('mangxahoi',$mangxahoi);
            });
             View::composer('frontend.general.footer', function($view) use($mangxahoi) {
                $view->with('mangxahoi',$mangxahoi);
            });
        }
        if(Schema::hasTable('doi_tac'))
        {
            $doitac = DoiTac::where('status','active')->get();
            
             View::composer('frontend.general.footer', function($view) use($doitac) {
                $view->with('doitac',$doitac);
            });
        }
        if(Schema::hasTable('du_an'))
        {
            $duan = DuAn::where('status','active')->get();
            
             View::composer('frontend.general.header', function($view) use($duan) {
                $view->with('duan',$duan);
            });
        }
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

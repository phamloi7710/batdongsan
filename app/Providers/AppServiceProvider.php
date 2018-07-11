<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Model\SanGiaoDich\Category;
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

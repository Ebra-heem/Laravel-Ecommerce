<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Category;
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
    

            View::composer('fontEnd.includes.menu',function($view){
            $categoris = Category::with('childs')->where('parent_id',0)->get();
            
           $view->with('categoris',$categoris);
            });
            View::composer('fontEnd.category.categoryContent',function($view){
            $categoris = Category::with('childs')->where('parent_id',0)->get();
            
           $view->with('categoris',$categoris);
            });
           /* 
             View::composer('fontEnd.includes.menu',function($view){
            $publishedCategories = Category::where('publicationStatus',1)->get();
            
           $view->with('publishedCategories',$publishedCategories);
        });
        */
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

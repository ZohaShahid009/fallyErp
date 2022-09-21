<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //   Paginator::useBootstrap();

        Schema::defaultStringLength(191);
        $product = Product::get();
        $record = Category::get();
        $categories=[];
        foreach ($record as $category) {
           $check = $category->products()->first();
           // dd($check);
           if (isset($check->tittle)) {
               $a = $category;
               array_push($categories, $a);
        
           }
        }
        view()->share('categories' , $categories );
        view()->share('product' , $product);
    //    view()->share('product', $product ,'categories' , $categories);
    }

}

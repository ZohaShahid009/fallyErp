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
        //  Paginator::useBootstrap();

        Schema::defaultStringLength(191);
             $categories =Category::get();
            $navbars=DB::table('categories')->join('products', 'products.category_id', '=', 'categories.id')->select('categories.*', 'products.tittle', 'products.cost')->get();
            view()->share('navbars', $navbars);

    }

}

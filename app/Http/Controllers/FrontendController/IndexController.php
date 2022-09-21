<?php

namespace App\Http\Controllers\FrontendController;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function show()
    {
        return view('frontend.index');
    }
    public function sale()
    {
        return view('frontend.PointofSale');
    }
    public function price()
    {
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

        // $categories=DB::table('categories')->join('products','products.category_id','=','categories.id')->select('categories.*','products.tittle','products.cost')->get();
        // dd($categories);

        return view('frontend.pricing')->with(compact('product' , 'categories'));
    }

    public function apps()
    {
        return view('frontend.Selected_apps');
    }
    public function signin()
    {
        return view('frontend.Signin');
    }
    public function signup()
    {

    return view('frontend.Signup');

    }


}

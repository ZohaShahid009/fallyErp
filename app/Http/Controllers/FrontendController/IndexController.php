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

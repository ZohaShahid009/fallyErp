<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
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
        return view('frontend.pricing');
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

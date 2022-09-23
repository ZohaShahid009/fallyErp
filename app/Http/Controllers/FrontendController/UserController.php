<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function signup_user(Request $request)
{

         $request->validate([
        'email'=>'required|email|unique:users,email,except,id',
        'name' => 'required',
        'password'=>'required|min:8',

    ]);
    $user =  new User ([
        'email' => $request->get('email'),
        'name' => $request->get('name'),
        'password'=>Hash::make( $request->get('password')),
    ]);
    $user->save();
    return redirect('/signin')->with('message', 'welcome');
}
}

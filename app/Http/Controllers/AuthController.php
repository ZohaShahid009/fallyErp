<?php

namespace App\Http\Controllers;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:8'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard')->withSuccess('Logged In Successfully');
        }
        return redirect('login')->withSuccess("Login Details are Incorrect");
    }
    public function registration(){
        return view('auth.registration');
    }
    public function submit_registration(Request $request){
        $request->validate([
            'email'=>'required|email|unique:users,email,except,id',
            'name'=>'required|min:2',
            'password'=>'required|min:8'
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect('dashboard')->withSuccess('Logged In Successfully');
    }

    public function create(array $data){
       return  User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);
    }


    public function dashboard(){
            return view('admin.pages.dashboard.dashboard');
    }


    public function signout(){
        Auth::logout();
        return redirect("login");
    }
}

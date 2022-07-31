<?php

namespace App\Http\Controllers;
use Hash;
use Session;
// use Illuminate\Support\Facades\Mail;
use App\Mail\BetMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\welcomenotification;
use Illuminate\Support\Facades\Notification;
// use App\Models\User;

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
    //     $data = $request->all();
    //     $check = $this->create($data);
    //     $email=User::first();
    //     Notification::send($email, new welcomenotification);
    //
//     $data=['name'=>"zoha",'data'=>"hello zoi"];
// $user['to']='zohashahid604@gmail.com';
// Mail::send('mail',$data,function($message) use ($user){
//     $message->to('zohashahid604@gmail.com');
//     $message->subject('hello its done');
// });
// dd('done');
//  $data=['name'=>"",'data'=>" has  successfully Register","email"=>$request->input('email')];
// $user['to']='zohashahid604@gmail.com';
// Mail::send( 'data', function ($messages) use ($request) {
//     $messages->from('zoha@gmail.com','wjjkask');
//     $messages->to($request->email,'fyp')->subject('Walcom Email');

// });
// Alert::success('Register sucessfully', 'Success Message');
// return back();

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

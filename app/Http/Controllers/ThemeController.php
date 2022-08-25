<?php

namespace App\Http\Controllers;

use App\Mail\BetMail;
use Illuminate\Http\Request;
use App\Models\theme;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ThemeController extends Controller
{
    public function sendEmail(){
        $user = User::where('name','zoha')->first();
        $theme = theme::where('status', 1)->first();
        if(! $theme)
        {
            $theme = theme::first();

        }
        else{
            $theme = theme::where('status', 1)->first();
        }

        $themeName = '';

        switch($theme->name)
        {
            case 'theme1':
            $themeName ='theme1';
            break;

            case 'theme2':
            $themeName ='theme2';
            break;

            case 'theme3':
            $themeName ='theme3';
            break;
        }
        // dd($themeName);
    $data=[
        'username' => $user->name,
        'email' =>$user->email,
        'theme' => $themeName,
        'color' => '#0000FF'
    ];
    // for view your email in web browser
//  return new BetMail($data);
        //  $email = 'hadiniazo@gmail.com';
        //  for view your email in gmail
        
        Mail::to($user->email)->send(new BetMail($data));
        return 'email send' ;
    }
    public function email_theme()
    {
        return view('admin.email.mail_theme');
    }
    public function theme()
    {
        //
        $theme = theme::all();
        return view('admin.email.list', compact('theme'));
    }
    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        theme::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
    // public function test(){
    //    dd(Auth::user()->email);

    // }
}

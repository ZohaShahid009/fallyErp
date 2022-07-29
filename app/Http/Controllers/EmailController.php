<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailSettings;
use App\Notifications\welcomenotification;
use Illuminate\Support\Facades\Notification;


class EmailController extends Controller
{
    public function email()
    {
    //    $email=EmailSettings::first();
    //    Notification::send($email, new welcomenotification);
    //  dd('done');
     return view('admin.pages.settings.email.create');
    }
    
    public function addemail(Request $request)
    {
       

            $request->validate([
            'smtp_protocol' => 'required',
            'smtp_host' => 'required',
            'smtp_username' => 'required',
            'smtp_password' => 'required',
            'smtp_port' => 'required',
            'smtp_security' => 'required',
            'connection_timeout' => 'required',
            'debug_mode' => 'required',
        ]);
        $email= new EmailSettings;
        $email->smtp_protocol=$request->get('smtp_protocol');
        $email->smtp_host=$request->get('smtp_host');
        $email->smtp_username=$request->get('smtp_username');
        $email->smtp_password=$request->get('smtp_password');
        $email->smtp_port=$request->get('smtp_port');
        $email->smtp_security=$request->get('smtp_security');
        $email->connection_timeout=$request->get('connection_timeout');
        $email->debug_mode=$request->get('debug_mode');
        $email->save();
        return redirect('/add-email-form')->with('message', 'Email has been added');
    }
    
    public function languages()
    {
    
     return view('admin.pages.settings.languages.create');
    }
}

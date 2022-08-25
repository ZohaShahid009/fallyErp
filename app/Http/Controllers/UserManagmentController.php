<?php

namespace App\Http\Controllers;

use App\Models\theme;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use App\Models\UserManage;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserManagmentController extends Controller
{

    public function adduser(Request $request)
    {

             $request->validate([
            'email'=>'required|email|unique:users,email,except,id',
            'password'=>'required|min:8',
            'first_Name' => 'required',
            'Last_name' => 'required',
            'email' => 'required',
            'Phone_Number' => 'required',
            'User_Type' => 'required',
            
        ]);
        $user =  new User ([
            'first_Name' => $request->get('first_Name'),
            'Last_name' => $request->get('Last_name'),
            'email' => $request->get('email'),
            'password'=>Hash::make( $request->get('password')),
           
            'Phone_Number' => $request->get('Phone_Number'),
            'User_Type' => $request->get('User_Type'),
        ]);
        $user->save();
        return redirect('/user-list')->with('message', 'User has been added');
    }
    public function userlist()
    {
        $user = User::all();
        return view('admin.pages.settings.user-manag.view', compact('user'));
    }
    public function edituser(Request $request, $id)
    {
        $user = User::find($id);
        return view('admin.pages.settings.user-manag.edit', compact('user'));
    }


    public function updateuserdata(Request $request, $id)
    {
        $user =  User::find($id);
        $user->first_Name = $request->get('first_Name');
        $user->Last_name = $request->get('Last_name');
        $user->email= $request->get('email');
        $user->password=$request->get('password');
        $user->Phone_Number = $request->get('Phone_Number');
        $user->User_Type= $request->get('User_Type');
        $user->update();
        return redirect('/user-list')->with('info', 'Users updated successfully');
    }

    public function deleteuser($id)
    {
        User::find($id)->delete();
        return back();
    }

    public function user_detail(Request $request){
        $id = $request->id;
        $user =  User::find($id);

        echo view('admin.pages.settings.user-manag.list', compact('user'));
    }



    public function show()
    {
        return view('admin.pages.settings.user-manag.add');
    }



}

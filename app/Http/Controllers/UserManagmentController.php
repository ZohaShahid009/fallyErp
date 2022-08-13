<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserManage;

class UserManagmentController extends Controller
{
    
    public function adduser(Request $request)
    {
        $request->validate([
            'first_Name' => 'required',
            'Last_name' => 'required',
            'email' => 'required',
            'Phone_Number' => 'required',
            'User_Type' => 'required',
 
        ]);
        $user =  new UserManage ([
            'first_Name' => $request->get('first_Name'),
            'Last_name' => $request->get('Last_name'),
            'email' => $request->get('email'),
            'Phone_Number' => $request->get('Phone_Number'),
            'User_Type' => $request->get('User_Type'),
        ]);
        $user->save();
        return redirect('/user-list')->with('message', 'User has been added');
    }
    public function userlist()
    {
        $user = UserManage::all();
        return view('admin.pages.settings.user-manag.view', compact('user'));
    }
    public function edituser(Request $request, $id)
    {
        $user = UserManage::find($id);
        return view('admin.pages.settings.user-manag.edit', compact('user'));
    }


    public function updateuserdata(Request $request, $id)
    {
        $user =  UserManage::find($id);
        $user->first_Name = $request->get('first_Name');
        $user->Last_name = $request->get('Last_name');
        $user->email= $request->get('email');
        $user->Phone_Number = $request->get('Phone_Number');
        $user->User_Type= $request->get('User_Type');
        $user->update();
        return redirect('/user-list')->with('info', 'Users updated successfully');
    }
    
    public function deleteuser($id)
    {
        UserManage::find($id)->delete();
        return back();
    }

    public function user_detail(Request $request){
        $id = $request->id;
        $user =  UserManage::find($id);

        echo view('admin.pages.settings.user-manag.list', compact('user'));
    }


 
    public function show()
    {
        return view('admin.pages.settings.user-manag.add');
    }











}

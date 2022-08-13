<?php

namespace App\Http\Controllers;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        // $user =  User::find($id);
        // return view('auth.changePassword', compact('user'));
        return view('auth.changePassword');
    } 
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password change successfully.');
    }
//     public function Crunnt()
// {
//     $staff = Staff::all();
//     return view('admin.pages.staff.list', compact('staff'));
// }

}
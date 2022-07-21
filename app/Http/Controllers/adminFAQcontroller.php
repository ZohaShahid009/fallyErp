<?php

namespace App\Http\Controllers;

use App\Models\adminFAQ;
use Illuminate\Http\Request;

class adminFAQcontroller extends Controller
{
    public function addadmin(Request $request)
    {
        $request->validate([
            'Category_id'=> 'required',
            'Tittle'=> 'required',
            // 'Discrption'=> 'required',
        ]);
        $admin = new adminFAQ([
            'Category_id'=> $request->get('Category_id'),
            'Tittle'=> $request->get('Tittle'),
            'Discrption'=> $request->get('Discrption'),
        ]);
        $admin->save();
        return redirect()->back()->with('message', 'Admin has been added');
    }

    public function adminlist()
    {
        $admin = adminFAQ::all();
        return view('admin.pages.admin_FAQ.view', compact('admin'));
    }
    // check
    public function editadmin(Request $request, $id){
        $admin = adminFAQ::find($id);
        return view('admin.pages.admin_FAQ.edit', compact('admin'));
    }
    // Delete ADmin
    public function deleteadmin($id){
        adminFAQ::find($id)->delete();
        return back();
    }
    // Update Staff


}

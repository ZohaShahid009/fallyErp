<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupportTicket;
use App\Models\Company;
use App\Models\User;

class SupportTicketController extends Controller
{
    public function AddSupportTicket(Request $request){
        if ($request->isMethod('get')) {
            $company =  Company::all();
            $admin =  User::all();
            return view('admin.pages.support_ticket.create', compact('company','admin'));
        };

        $SupportTicket = new SupportTicket([
            'type'=> $request->get('type'),
            'subject'=> $request->get('subject'),
            'description'=> $request->get('description'),
        ]);
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $SupportTicket->image =  $imageName;
        }
        $SupportTicket->save();
        return back()->with('info', 'Sub Category updated successfully');

    }

    public function viewSupportTicket(){
        $SupportTicket =  SupportTicket::all();
        $admin =  User::all();
        return view('admin.pages.support_ticket.list', compact('SupportTicket','admin'));
    }

    public function detailsSupportTicket(Request $request, $id){
        $SupportTicket =  SupportTicket::find($id);
        $admin =  User::all();
        return view('admin.pages.support_ticket.view', compact('SupportTicket','admin'));
    }
}

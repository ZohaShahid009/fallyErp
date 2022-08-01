<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupportTicket;
use App\Models\Company;
use App\Models\User;
use App\Models\Staff;
use App\Models\TicketNotes;

class SupportTicketController extends Controller
{
    public function AddSupportTicket(Request $request){
        if ($request->isMethod('get')) {
            $company =  Company::all();
            $admin =  User::all();
            return view('admin.pages.support_ticket.create', compact('company','admin'));
        };
        $status = "new";
        $assign = "none";

        $SupportTicket = new SupportTicket([
            'type'=> $request->get('type'),
            'subject'=> $request->get('subject'),
            'description'=> $request->get('description'),
            'status'=>$status,
            'assign_to'=>$assign,
        ]);
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $SupportTicket->image =  $imageName;
        }
        $SupportTicket->save();
        return redirect('/view/supportticket')->with('info', 'Sub Category updated successfully');

    }

    public function viewSupportTicket(){
        $SupportTicket =  SupportTicket::all();
        $admin =  User::all();
        return view('admin.pages.support_ticket.list', compact('SupportTicket','admin'));
    }

    public function detailsSupportTicket(Request $request, $id){
        $SupportTicket =  SupportTicket::find($id);
        $admin =  User::all();
        $staff = Staff::all();
        return view('admin.pages.support_ticket.view', compact('SupportTicket','admin','staff'));
    }

    public function assignSupportTicket(Request $request, $id){
        $record = SupportTicket::find($id);
        $record->assign_to = $request->get('assign');
        $record->update();
        return back()->with('info', 'Ticket Assigned successfully');
    }

    public function addnotes(Request $request, $id){
        $record = new TicketNotes([
            'notes'=> $request->get('notes'),
            'ticket_id'=> $id,
        ]);
        $record->save();
        return back()->with('info', 'Notes Added successfully');
    }
}

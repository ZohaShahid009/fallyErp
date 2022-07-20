<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Staff;
use App\Models\User;
use Livewire\Component;
use Image;


// ----> TOASTR NOTICFICATION EXAMPLES <----- \\

// return redirect()->route('your route name')->with('message','Data added Successfully');

// return redirect()->route('your route name')->with('error','Data Deleted');

// return redirect()->route('your route name')->with('Warning','Are you sure you want to delete? ');

// return redirect()->route('your route name')->with('info','This is xyz information');

// ----> TOASTR NOTICFICATION EXAMPLES ENDS <----- \\

class AdminController extends Controller
{

    // Show all Companies list
    public function companylist()
    {
        //
        $companies = Company::all();
        return view('admin.pages.company.list', compact('companies'));
    }
    // Create new company
    public function addcompany(Request $request)
    {
        $request->validate([
            'company_name'=> 'required',
            'company_email'=> 'required|email',
            'company_phone' => 'required',
            'address' => 'required',
        ]);
        $company = new Company([
            'company_name' => $request->get('company_name'),
            'primary_contact'=> $request->get('primary_contact'),
            'company_email'=> $request->get('company_email'),
            'website_url'=> $request->get('website_url'),
            'company_phone'=> $request->get('company_phone'),
            'vat_number'=> $request->get('vat_number'),
            'address'=> $request->get('address'),
            'zip_code'=> $request->get('zip_code'),
            'city'=> $request->get('city'),
            'country'=> $request->get('country'),
            'state'=> $request->get('state'),
            'facebook_url'=> $request->get('facebook_url'),
            'twitter_url'=> $request->get('twitter_url'),
            'skype_url'=> $request->get('skype_url'),
            'linkedin_url'=> $request->get('linkedin_url'),
            'youtube_url'=> $request->get('youtube_url'),
            'googleplus_url'=> $request->get('googleplus'),
            'Pinterest_url'=> $request->get('Pinterest_url'),
        ]);
        $company->save();
        return redirect('/company-list')->with('message', 'company has been added');
    }
    // View company Details
    public function showCompany(Request $request, $id){
        $company =  Company::find($id);
        return view('admin.pages.company.view', compact('company'));
    }

    public function company_detail(Request $request){
        $id = $request->id;
        $company =  Company::find($id);

        echo view('admin.pages.company.view', compact('company'));
    }
    // Show Copmany edit Form
    public function editCompany(Request $request, $id){
        $company =  Company::find($id);
        return view('admin.pages.company.edit', compact('company'));
    }
    // Edit company
    public function updateCompany(Request $request,$id)
    {
        $request->validate([
            'company_email'=> 'email',
        ]);
        $company = Company::find($id);
        $company->company_name = $request->get('company_name');
        $company->company_email = $request->get('company_email');
        $company->company_phone = $request->get('company_phone');
        $company->primary_contact = $request->get('primary_contact');
        $company->website_url = $request->get('website_url');
        $company->vat_number = $request->get('vat_number');
        $company->address = $request->get('address');
        $company->zip_code = $request->get('zip_code');
        $company->city = $request->get('city');
        $company->country = $request->get('country');
        $company->state = $request->get('state');
        $company->facebook_url = $request->get('facebook_url');
        $company->twitter_url = $request->get('twitter_url');
        $company->skype_url = $request->get('skype_url');
        $company->linkedin_url = $request->get('linkedin_url');
        $company->googleplus_url = $request->get('googleplus_url');
        $company->Pinterest_url = $request->get('Pinterest_url');

        $company->update();
        return redirect('/company-list')->with('info', 'company updated successfully');
    }

    // Delete company by id
    public function delete($id){
        Company::find($id)->delete();
        return back();
    }
//-------< End Company Section >---------\\


//-------< Srart Staff Section >---------\\

    public function stafflist()
    {
        $staff = Staff::all();
        return view('admin.pages.staff.list', compact('staff'));
    }

    // Add Staff
    public function addstaff(Request $request)
    {
        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $staff = new Staff([
            'first_name'=> $request->get('first_name'),
            'last_name'=> $request->get('last_name'),
            'email'=> $request->get('email'),
            'hourly_rate'=> $request->get('hourly_rate'),
            'phone'=> $request->get('phone'),
            'facebook_url'=> $request->get('facebook_url'),
            'linkedin_url'=> $request->get('linkedin_url'),
            'skype_url'=> $request->get('skype_url'),
            'language_id'=> $request->get('language_id'),
            'email_signature'=> $request->get('email_signature'),
            'diraction_id'=> $request->get('diraction_id'),
            'department_id'=> $request->get('department_id'),
            'is_administrator'=> $request->get('is_administrator'),
            'password'=> $request->get('password'),
        ]);
        $staff->save();
        return redirect()->back()->with('message', 'Staff has been added');
    }
    // Show edit staff form
    public function editstaff(Request $request, $id){
        $staff =  Staff::find($id);
        return view('admin.pages.staff.edit', compact('staff'));
    }
    // Delete staff
    public function deletestaff($id){
        Staff::find($id)->delete();
        return back();
    }
    // Update Staff
    public function updatestaff(Request $request,$id)
    {

        $request->validate([
            'email'=> 'email',
        ]);

        $staff = Staff::find($id);
        //
        $staff->first_name = $request->get('first_name');
        $staff->last_name = $request->get('last_name');
        $staff->email = $request->get('email');
        $staff->hourly_rate = $request->get('hourly_rate');
        $staff->phone = $request->get('phone');
        $staff->facebook_url = $request->get('facebook_url');
        $staff->linkedin_url = $request->get('linkedin_url');
        $staff->skype_url = $request->get('skype_url');
        if($request->hasFile('profile_avatar')){
            $img_tmp = $request->file('profile_avatar');
                if($img_tmp->isValid()){
                    $extension = $img_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'staff_images/'.$imageName;
                    Image::make($img_tmp)->save($imagePath);
                    }
                    $staff->image = $imageName;
                }
        $staff->update();
        return redirect()->back()->with('info', 'staff updated successfully');
    }

    //-------< End Staff Section >---------\\

    //-------< Srart Super Admin Crud Section >---------\\

    // Adding super admin
    public function addsuperadmin(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $imageName = "blank.png";
        if($request->hasFile('profile_avatar')){
            $img_tmp = $request->file('profile_avatar');
                if($img_tmp->isValid()){
                    $extension = $img_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'superadmin_images/'.$imageName;
                    Image::make($img_tmp)->save($imagePath);
                    };
            };
        $user = new User([
            'name'=> $request->get('name'),
            'email'=> $request->get('email'),
            'password'=> $request->get('password'),
            'profile_image'=> $imageName,
        ]);
        $user->save();
        return redirect()->back()->with('message', 'Super Admin has been added');
    }

    // View super Admin List/Table
    public function superadminlist()
    {
        $superadmin = User::all();
        return view('admin.pages.superadmin.list', compact('superadmin'));
    }

    // Delete Super Admin
    public function deletesuperadmin($id){
        User::find($id)->delete();
        return back();
    }

    //  Edit Super Admin
    public function editsuperadmin(Request $request, $id){
        $superadmin =  User::find($id);
        return view('admin.pages.superadmin.edit', compact('superadmin'));
    }

    // Update Super Admin
    public function updatesuperadmin(Request $request,$id)
    {
        $request->validate([
            'email'=> 'email',
        ]);

        $superadmin = User::find($id);
        $superadmin->name = $request->get('name');
        $superadmin->email = $request->get('email');
        if($request->hasFile('profile_avatar')){
            $img_tmp = $request->file('profile_avatar');
                if($img_tmp->isValid()){
                    $extension = $img_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'superadmin_images/'.$imageName;
                    Image::make($img_tmp)->save($imagePath);
                    }
                    $superadmin->profile_image = $imageName;
            }
        $superadmin->update();
        return redirect()->back()->with('info', 'Superadmin updated successfully');
    }
//-------< End Super Admin Crud Section >---------\\

}

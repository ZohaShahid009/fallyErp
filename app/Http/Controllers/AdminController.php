<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class AdminController extends Controller
{
    // Show all Companies list
    public function companylist()
    {
        //
        $companies = Company::all();
        return view('admin.pages.company.list', compact('companies','companies'));
    }
    // Create new company
    public function addcompany(Request $request)
    {
        $request->validate([
            'company_name'=> 'required',
            'email'=> 'required|email',
            'company_phone' => 'required',
            'address' => 'required',
        ]);
        $company = new Company([
            'company_name' => $request->get('company_name'),
            'primary_contact'=> $request->get('primary_contact'),
            'company_email'=> $request->get('email'),
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
        return redirect()->back()->with('success', 'company has been added');
    }
    // View company Details
    public function showCompany(Request $request, $id){
        $company =  Company::find($id);
        return view('admin.pages.company.view', compact('company'));
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
            'company_name'=>'required',
            'email'=> 'required',
            'phone' => 'required'
        ]);
        $company = Company::find($id);
        $company->company_name = $request->get('company_name');
        $company->company_email = $request->get('email');
        $company->company_phone = $request->get('phone');
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
        return redirect()->back()->with('success', 'company updated successfully');
    }
    // Delete company by id
    public function deleteCompany(Request $company , $id)
    {
        //
        $company=Company::where('id',$id)->delete();
        return redirect()->back()->with('success', 'company deleted successfully');
    }

}

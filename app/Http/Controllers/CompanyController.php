<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function companyDetails(Request $request, $id){
        if ($request->isMethod('get')) {
            $company =  Company::find($id);
            return view('admin\busniessPages\companyDetails', compact('company'));
        };
        $company = Company::find($id);
        $company->company_name = $request->get('company_name');
        $company->company_email = $request->get('company_email');
        $company->company_phone = $request->get('company_phone');
        $company->website_url = $request->get('website_url');
        $company->vat_number = $request->get('vat_number');
        $company->address = $request->get('address');
        $company->zip_code = $request->get('zip_code');
        $company->city = $request->get('city');
        $company->country = $request->get('country');
        $company->company_size = $request->get('company_size');
        $company->email_signature = $request->get('email_signature');
        $company->industry = $request->get('industry');
        $company->state = $request->get('state');
        if (isset($request->company_logo)  && ($request->company_logo->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->company_logo->extension();
            $request->company_logo->move(public_path('images'), $imageName);
            $company->company_logo =  $imageName;
        }


        $company->update();
        return redirect('/company/details/'.$id)->with('info', 'Company details updated successfully');
    }
}

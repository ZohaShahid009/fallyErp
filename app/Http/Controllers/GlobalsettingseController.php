<?php

namespace App\Http\Controllers;

use App\Models\Timezone;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\GlobalSettings;

class GlobalsettingseController extends Controller
{
    public function create()
    {
        $timezones = Timezone::Orderby('offset')->get();
        // dd($timezones);
        return view('admin.pages.settings.create', compact('timezones'));
    }
    public function settinglist()
    {
        //   $timezone= GlobalSettings::paginate(6);
        $timezone = GlobalSettings::all();
       return view('admin.pages.settings.list', compact('timezone'));
    }
    public function editsettings(Request $request, $id)
    {
        $timezones = Timezone::Orderby('offset')->get();
        $settings = GlobalSettings::find($id);
        // dd($settings );
        return view('admin.pages.settings.edit', compact('settings' ,'timezones'));
    }

    public function  updatesettings(Request $request, $id)
    {

        $timezone =  GlobalSettings::find($id);
        $timezone->company_name = $request->get('company_name');
        $timezone->company_contact = $request->get('company_contact');
        $timezone->company_address = $request->get('company_address');
        $timezone->company_city = $request->get('company_city');
        $timezone->company_phone = $request->get('company_phone');
        $timezone->company_email = $request->get('company_email');
        $timezone->company_domain = $request->get('company_domain');
        $timezone->invoice_detail = $request->get('invoice_detail');
        $timezone->tax = $request->get('tax');
        $timezone->second_tax = $request->get('second_tax');
        $timezone->vat_number = $request->get('vat_number');
        $timezone->default_currency = $request->get('default_currency');
        $timezone->date_formate = $request->get('date_formate');
        $timezone->time_formate = $request->get('time_formate');
        $timezone->timezone = $request->get('timezone');
        $timezone->money_formate = $request->get('money_formate');
        $timezone->currency_position = $request->get('currency_position');

        if (isset($request->company_logo)  && ($request->company_logo->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->company_logo->extension();
            $request->company_logo->move(public_path('images'), $imageName);
            $timezone->company_logo =  $imageName;
        }
        // zoha
        if (isset($request->footer_logo)  && ($request->footer_logo->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->footer_logo->extension();
            $request->footer_logo->move(public_path('images'), $imageName);
            $timezone->footer_logo =  $imageName;
        }
        if (isset($request->auth_logo)  && ($request->auth_logo->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->auth_logo->extension();
            $request->auth_logo->move(public_path('images'), $imageName);
            $timezone->auth_logo =  $imageName;
        }
        if (isset($request->admin_logo)  && ($request->admin_logo->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->admin_logo->extension();
            $request->admin_logo->move(public_path('images'), $imageName);
            $timezone->admin_logo =  $imageName;
        }
        if (isset($request->invoice_logo)  && ($request->invoice_logo->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->invoice_logo->extension();
            $request->invoice_logo->move(public_path('images'), $imageName);
            $timezone->invoice_logo =  $imageName;
        }

        $timezone->update();
        return redirect('/setting-list')->with('info', 'Settings updated successfully');
    }
    // zoh rfff
    // if (isset($request->invoice_logo)  && ($request->invoice_logo->extension() != '')) {
    //     $imageName = rand(0, 999999999) . time() . '.' . $request->invoice_logo->extension();
    //     $request->invoice_logo->move(public_path('images'), $imageName);
    //     $timezone->invoice_logo[] =  $imageName;
    // }

    // zoha rff end
}

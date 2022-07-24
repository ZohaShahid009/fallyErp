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
}

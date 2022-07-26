<?php

namespace App\Http\Controllers;
use App\Models\FrontPage;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function createPage(Request $request){
        if ($request->isMethod('get')) {
            return view('admin.pages.front_settings.create');
        };
        $page = new FrontPage([
            'title'=> $request->get('title'),
            'link'=> $request->get('link'),
            'content'=> $request->get('content'),
        ]);
        $page->save();
        return redirect('/front_settings/list')->with('info', 'Category updated successfully');
    }
    public function frontpagelist(){
        $frontpage = FrontPage::all();
        return view('admin.pages.front_settings.list', compact('frontpage'));
    }
}

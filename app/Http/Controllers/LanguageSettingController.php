<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\language;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class LanguageSettingController extends Controller
{
    public function languages()
    {
     return view('admin.pages.settings.languages.create');
    }


public function add(Request $request)
{
    // return $request;
    $request->validate([
        'language' => 'required',
        'language_code' => 'required',
        'description' => 'required',
        // 'def' => 'in:1,1 else 0',
            // 'status' => 'required',

    ]);
    $language = new language;

    $language->language=$request->get('language');
    $language->language_code = $request->get('language_code');
    $language->description = $request->get('description');
    $language->default = $request->get('default');
    $language->status = $request->get('status');

    // return $language;
    $language ->save();
    return redirect('/list-languages')->with('message', 'Langauge has been added');
}
public function list()
{
    $language = language::all();
    return view('admin.pages.settings.languages.view',compact('language'));
}
public function editLang(Request $request, $id){
    $language =  language::find($id);
    return view('admin.pages.settings.languages.edit', compact('language'));
}
public function updateLang(Request $request,$id)
{
$default="";
$status="";
    if($request->get('default')==null){
    $default='0';
    }
    else{
        $default='1';
    }
    if($request->get('status')==null){
        $status='0';
        }
        else{
            $status='1';
        }
    $language = language::find($id);
    $language->language = $request->get('language');
    $language->language_code = $request->get('language_code');
    $language->description = $request->get('description');
    $language->default = $default;
    $language->status = $status;
    // return $language;

    $language->update();

   return redirect('/list-languages')->with('info', 'company updated successfully');
}
// public function updateLang(Request $request, $id = null)
// {
//     if ($request->isMethod('post')) {
//         $data = $request->all();
//         $update = [
//             'language' => $data['language'],
//             'language_code' => $data['language_code'],
//             'description' => $data['description'],
//             'default' => $data['default'],
//             'status' => $data['status'],
//         ];
//         dd($data);
//         language::where(['id' => $id])->update($update);
//         return redirect('/company-list')->with('info', 'company updated successfully');
//     }

// }
public function deleteLanguage($id){
    language::find($id)->delete();
    return back();
}
}

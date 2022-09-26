<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function addproject(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'tittle' => 'required',
           'short_description' => 'required',
           'long_description'=> 'required',
           'start_date' => 'required',
           'end_date' => 'required',
            ]);
        $project = new Project([
            'category' => $request->get('category'),
            'tittle' => $request->get('tittle'),
            'short_description' => $request->get('short_description'),
            'long_description' => $request->get('long_description'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),]);
            if (isset($request->image)  && ($request->image->extension() != '')) {
                $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $project->image =  $imageName;
            }
            // dd($project);
             $project->save();
              return redirect('/add-project-form')->with('message', 'Projecct has been added');
    }
    public function productlist()
    {

        $project = Project::all();
       return view('admin.pages.Projects.view', compact('project'));
    }
    public function editproject(Request $request, $id)
    {
        $project= Project::find($id);
        // dd($admin);
        return view('admin.pages.Projects.edit', compact('project'));
    }
    public function updateproject(Request $request, $id)
    {
        $project = Project::find($id);
        $project->category = $request->get('category');
        $project->tittle = $request->get('tittle');
        $project->short_description = $request->get('short_description');
        $project->long_description = $request->get('long_description');
        $project->start_date = $request->get('start_date');
        $project->end_date = $request->get('end_date');
        $project->image = $request->get('image');
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $project->image =  $imageName;
        }
        $project->update();
        return redirect('/product-list')->with('info', 'Project updated successfully');
    }
    public function deleteproject($id)
    {
        Project::find($id)->delete();
        return back();
    }
    public function project_detail(Request $request){
        $id = $request->id;
        $project =  Project::find($id);
        echo view('admin.pages.Projects.list', compact('project'));
    }

}

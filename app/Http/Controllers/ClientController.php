<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\Task;

class ClientController extends Controller
{

 public function addClient(Request $request)
        {
    $request->validate([
        'logo' => 'required',
    ]);
    $client= new client();
    if (isset($request->logo)  && ($request->logo->extension() != '')) {
        $imageName = rand(0, 999999999) . time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('images'), $imageName);
        $client->logo=  $imageName;

        $client->save();
        return redirect('/client-list')->with('message', 'Client has been added');
    }
}

public function ClientList()
{

    $client = client::all();
   return view('admin.pages.invoice.customer.view', compact('client'));
}

public function EditClient(Request $request, $id)
{
    $clients = client::find($id);
    // dd($settings );
    return view('admin.pages.invoice.customer.edit', compact('clients'));
}

   public function  UpdateClient(Request $request, $id)
        {

            $clients =  client::find($id);
            if (isset($request->logo)  && ($request->logo->extension() != '')) {
                $imageName = rand(0, 999999999) . time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('images'), $imageName);
                $clients->logo =  $imageName;
            }
            // dd($clients);
            $clients->update();
            return redirect('/client-list')->with('info', 'Client updated successfully');
        }
        public function delete($id){
            client::find($id)->delete();
            return back();
        }
        public function client_detail(Request $request){
            $id = $request->id;
            $clients =  client::find($id);
            echo view('admin.pages.invoice.customer.list', compact('clients'));
        }
        // for tasks



     public function  addTask(Request $request)
{
    // return $request;
    $request->validate([
        'task_name' => 'required',
        'assign_to' => 'required',
        'description' => 'required',
        // 'def' => 'in:1,1 else 0',
            // 'status' => 'required',
    ]);
    $task = new Task;
    $task->task_name=$request->get('task_name');
    $task->assign_to = $request->get('assign_to');
    $task->status = $request->get('status');
    $task->description = $request->get('description');

    // return $task;
    $task ->save();
    return redirect('/task-list')->with('message', 'Task has been added');
}

public function TaskList()
{

    $task = Task::all();
   return view('admin.pages.invoice.task.view', compact('task'));
}

public function EditTask(Request $request, $id)
{
    $task = Task::find($id);
    // dd($settings );
    return view('admin.pages.invoice.task.edit', compact('task'));
}


public function UpdateTask(Request $request,$id)
{


    if($request->get('status')==null){
        $status='0';
        }
        else{
            $status='1';
        }
    $task = Task::find($id);
    $task->task_name=$request->get('task_name');
    $task->assign_to = $request->get('assign_to');
    $task->description = $request->get('description');
    $task->status = $status;
    // return $language;
    $task->update();
   return redirect('/task-list')->with('info', 'Task updated successfully');
}

public function deleteTask($id){
    Task::find($id)->delete();
    return back();
}

public function task_detail(Request $request){
    $id = $request->id;
    $task =  Task::find($id);
    echo view('admin.pages.invoice.task.list', compact('task'));
}
}





















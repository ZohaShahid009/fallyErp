<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

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

}





















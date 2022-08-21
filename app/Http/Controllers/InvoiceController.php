<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Notifications\InvoiceEmailNotification;
use Illuminate\Support\Facades\Notification;

class InvoiceController extends Controller
{
    public function createinvoice(Request $request){
        if ($request->isMethod('get')) {
            $num = rand(0, 9999);
            $company =  Company::all();
            return view('admin.invoices.create', compact('company','num'));
        };
        $Invoice = new Invoice([
            'client_id' => $request->get('client_id'),
            'invoice_number'=> $request->get('ref_number'),
            'invoice_date'=> $request->get('invoice_date'),
            'due_date'=> $request->get('due_date'),
            'discount_type'=> $request->get('discount_type'),
            'private_notes'=> $request->get('notes'),
            'amount'=> $request->get('total_amount'),
        ]);
        $Invoice->send(new InvoiceEmailNotification());
        dd("after email send");
        //  $Invoice::notify($Invoice, new InvoiceEmailNotification);
        $Invoice->save();


        // Saving products details.
        foreach($request->name as $index => $name)
        {
            $transformed_data[] = array(
            $Invoice->products()->create([
                'invoice_id' => $Invoice->id,
                'item_name' => $request->name[$index],
                'item_description' => $request->desc[$index],
                'quantity' => $request->qty[$index],
                'unit_cost' => $request->price[$index],
                'line_total' => $request->total[$index],
                ])
            );
        }

        return redirect('/list/invoice/')->with('message', 'Invoice has been added');
    }

    public function listinvoice(Request $request){
        if ($request->isMethod('get')) {
        $invoice = Invoice::all();
        return view('admin.invoices.list', compact('invoice'));
        };
    }
    public function viewinvoice(Request $request, $id){
        // $product = InvoiceProduct::orderBy('id','desc')->where('invoice_id', $id)->get();
        // dd($product);
        $invoice = Invoice::find($id);
        $product = $invoice->products()->get();
        // dd($asdf);
        return view('admin.invoices.view', compact('invoice','product'));
    }
    public function deleteinvoice($id){
        $invoice = Invoice::find($id);
        $invoice->products()->delete();
        $invoice->delete();
         return back();
    }

}

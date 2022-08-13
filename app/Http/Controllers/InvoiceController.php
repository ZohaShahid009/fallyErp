<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\InvoiceProduct;

class InvoiceController extends Controller
{
    public function createinvoice(Request $request){
        if ($request->isMethod('get')) {
            $company =  Company::all();
            return view('admin.invoices.create', compact('company'));
        };
        // dd($request);
        $Invoice = new Invoice([
            'client_id' => $request->get('client_id'),
            'invoice_number'=> $request->get('ref_number'),
            'invoice_date'=> $request->get('invoice_date'),
            'due_date'=> $request->get('due_date'),
            'discount_type'=> $request->get('discount_type'),
            'private_notes'=> $request->get('notes'),
            'amount'=> $request->get('total_amount'),
        ]);
        $Invoice->save();

        foreach($request->products as $product) {
            $Invoice->products()->create([
                // 'invoice_id' => $Invoice->id,
                'item_name' => $product['name'],
                'item_description' => $product['desc'],
                'quantity' => $product['qty'],
                'unit_cost' => $product['price'],
                'line_total' => $product['total'],
            ]);
        }

        return redirect('/create/invoice/')->with('message', 'Invoice has been added');

    }

    public function listinvoice(Request $request){
        if ($request->isMethod('get')) {
        $invoice = Invoice::all();
        return view('admin.invoices.list', compact('invoice'));
        };
    }
    public function viewinvoice(Request $request, $id){
        $product = InvoiceProduct::orderBy('id','desc')->where('invoice_id', $id)->get();
        $invoice = Invoice::find($id);
        return view('admin.invoices.view', compact('invoice','product'));
    }

}

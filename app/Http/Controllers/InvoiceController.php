<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Notifications\InvoiceEmailNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\PaymentDetail;

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
            'balance'=> $request->get('total_amount'),
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
        $invoices_total = Invoice::sum('amount');
        $total_outstanding = Invoice::sum('balance');
        $invoices_total_paid = Invoice::sum('deposit_amount');
        return view('admin.invoices.list', compact('invoice','invoices_total','total_outstanding','invoices_total_paid'));
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
        $invoice->payments()->delete();
        $invoice->delete();
         return back();
    }

    public function createinvoicepayment(Request $request){
        if ($request->isMethod('get')) {
            $invoice =  Invoice::all();
            return view('admin.invoices.payments.create', compact('invoice'));
        };

        $invoice = Invoice::find($request->invoice_id);
        // dd($request);
        $payment = new PaymentDetail([
            'client_id' => $invoice->client_id,
            'invoice_id'=> $request->get('invoice_id'),
            'payment_amount'=> $request->get('payment_amount'),
            'payment_type'=> $request->get('payment_type'),
            'payment_date'=> $request->get('payment_date'),
            'transaction_id'=> $request->get('transaction_reference'),
            'private_notes'=> $request->get('private_notes'),
        ]);
        // dd($payment);
        // $payment->save();
        $total_deposit = $invoice->deposit_amount  + $request->get('payment_amount');
        $invoice->deposit_amount = $total_deposit;
        $invoice->balance = $invoice->amount - $total_deposit;

        $b = $invoice->amount;
        if($total_deposit == $b){
            $invoice->status = 4;
            // dd($invoice->status);
        }
        else {
            $invoice->status = 3;
        }

        $invoice->update();
        $payment->save();
        return redirect('/list/invoice/payment/')->with('message', 'New Payment has been added');
    }
    public function listinvoicepayment(Request $request){
        if ($request->isMethod('get')) {
            $payment =  PaymentDetail::all();
            return view('admin.invoices.payments.list', compact('payment'));
        };
    }

    public function viewinvoicepayment($id){
        $payment =  PaymentDetail::find($id);
        return view('admin.invoices.payments.view',compact('payment'));
    }

}

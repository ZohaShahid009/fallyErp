<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Notifications\InvoiceEmailNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\PaymentDetail;
use DateTime;
use DB;

class InvoiceController extends Controller
{
    // Create invoice start....
    public function createinvoice(Request $request){
        if ($request->isMethod('get')) {
            $num = rand(0, 9999);
            $company =  Company::all();
            return view('admin.invoices.create', compact('company','num'));
        };
        // dd($request);
        $request->validate([
            'client_id'=> 'required',
            'ref_number'=> 'required',
            'invoice_date' => 'required',
            'due_date' => 'required',
            'discount_type' => 'required',
        ]);
        $Invoice = new Invoice([
            'client_id' => $request->get('client_id'),
            'invoice_number'=> $request->get('ref_number'),
            'invoice_date'=> $request->get('invoice_date'),
            'due_date'=> $request->get('due_date'),
            'discount_type'=> $request->get('discount_type'),
            'private_notes'=> $request->get('notes'),
            'amount'=> $request->get('total_amount'),
            'balance'=> $request->get('total_amount'),
            'discount'=> $request->get('discount'),
        ]);
        $Invoice->send(new InvoiceEmailNotification());
        dd("after email send");
        //  $Invoice::notify($Invoice, new InvoiceEmailNotification);
        $Invoice->save();

        // Saving products details start.

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
        // Saving products details end.
        return redirect('/list/invoice/')->with('message', 'Invoice has been added');
    }

    // Create invoice End....

    // View Invoices Table Start....

    public function listinvoice(Request $request){
        if ($request->isMethod('get')) {
            foreach(Invoice::all() as $record){
                $date = new DateTime($record->due_date);
                $now = new DateTime();
                $aa = $record->status;
                if($date < $now && $aa < 4){
                    $record->status = 5;
                    $record->save();
                }
            }

        $invoice = Invoice::all();
        $totalstatus5 = Invoice::where('status', 5,)->count();
        $totalstatus4 = Invoice::where('status', 4,)->count();
        $totalstatus3 = Invoice::where('status', 3,)->count();
        $totalstatus2 = Invoice::where('status', 2,)->count();
        $totalstatus1 = Invoice::where('status', 1,)->count();
        $totalstatus0 = Invoice::where('status', 0,)->count();
        $countall = Invoice::count();
        $pastoverdue = Invoice::where('status', 5,)->sum('amount');
        $invoices_total = Invoice::sum('amount');
        $total_outstanding = Invoice::sum('balance');
        $invoices_total_paid = Invoice::sum('deposit_amount');
        return view('admin.invoices.list', compact('invoice','invoices_total','total_outstanding','invoices_total_paid','pastoverdue','totalstatus5','countall','totalstatus4','totalstatus3','totalstatus2','totalstatus1','totalstatus0'));
        };
    }
    // View Invoices Table End....

    // View Invoice Details Start....
    public function viewinvoice(Request $request, $id){
        // dd($product);
        $invoice = Invoice::find($id);
        $product = $invoice->products()->get();
        $payment = $invoice->payments()->get();
        return view('admin.invoices.view', compact('invoice','product','payment'));
    }
    // View Invoice Details End....

    // Delete Invoice start....
    public function deleteinvoice($id){
        $invoice = Invoice::find($id);
        $invoice->products()->delete();
        $invoice->payments()->delete();
        $invoice->delete();
         return back();
    }
    // Delete Invoice End....

    // Create Invoice payment start....
    public function createinvoicepayment(Request $request){
        if ($request->isMethod('get')) {
            $invoice =  Invoice::all();
            return view('admin.invoices.payments.create', compact('invoice'));
        };

        $request->validate([
            'invoice_id'=> 'required',
            'payment_amount'=> 'required',
            'payment_date' => 'required',
            'transaction_reference' => 'required',
        ]);
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
        $total_deposit = $invoice->deposit_amount  + $request->get('payment_amount');
        $invoice->deposit_amount = $total_deposit;
        $invoice->balance = $invoice->amount - $total_deposit;
        $invoice_amount = $invoice->amount;
        $invoice_status = $invoice->status;
        if($total_deposit == $invoice_amount && $invoice_status != 5){
            $invoice->status = 4;
            // dd($invoice->status);
        }
        elseif ($total_deposit == $invoice_amount && $invoice_status == 5) {
            $invoice->status = 6;
        }
        else {
            $invoice->status = 3;
        }

        $invoice->update();
        $payment->save();
        return redirect('/list/invoice/payment/')->with('message', 'New Payment has been added');
    }
    // Create Invoice payment End....

    // view Invoices payments start....
    public function listinvoicepayment(Request $request){
        if ($request->isMethod('get')) {
            $payment =  PaymentDetail::all();
            return view('admin.invoices.payments.list', compact('payment'));
        };
    }
    // view Invoices payments End....

    // view Invoice payments Details start....
    public function viewinvoicepayment($id){
        $payment =  PaymentDetail::find($id);
        return view('admin.invoices.payments.view',compact('payment'));
    }
    // view Invoice payments Details End....
}

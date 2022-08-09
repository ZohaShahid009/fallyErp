<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{
    public function  __construct() {
        Mollie::api()->setApiKey('test_UBvUQuCJj8cfBNrMVmG3GAW8mfBq6u'); // your mollie test api key
    }
    public function preparePayment()
    {   
    
        $payment = Mollie::api()->payments()->create([
        'amount' => [
            'currency' => 'EUR', // Type of currency you want to send
            'value' => '10.00', // You must send the correct number of decimals, thus we enforce the use of strings
        ],
        'description' => 'Payment By admin', 
        'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
        ]);
    
        $payment = Mollie::api()->payments()->get($payment->id);
    
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
    public function paymentSuccess() {

        echo 'payment has been received';

    }
}

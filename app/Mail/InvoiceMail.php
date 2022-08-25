<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;



class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
       
        // $this->users= $users;

    // dd($data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('zohashahid604@gmail.com', 'Me')
        
          ->to(Auth::user()->email)
            ->view('admin.email.invoicecreated')
            ->with([
                'data' => $this->data
            ]);

    // return $this->view('admin.email.mail_theme')
    // ->subject('Erp Details');
}
}

<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InvoiceEmailNotification extends Notification implements ShouldQueue
{
    use Queueable;
   
    public $invoice_date;
    public $invoice_number;
    public $amount;
    public $client_id;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($invoice_date,$invoice_number,$amount,$client_id)
    {
        $this->invoice_date=$invoice_date;
        $this->invoice_number=$invoice_number;
        $this->amount=$amount;
        $this->client_id=$client_id;

    }
   
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('$invoice_date,$invoice_number,$amount,$client_id')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            
                'client_id' => $this->client_id
            
        ];
    }
}

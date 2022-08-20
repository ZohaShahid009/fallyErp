<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    use HasFactory;

    protected $fillable = ['client_id',
        'invoice_id', 'payment_amount',
        'payment_type', 'payment_date', 'transaction_id',
        'private_notes', 'status' ,'payment_id'
    ];

    public function invoice()
    {
        return $this->belongsTo('App\Models\Invoice');

    }
    public function client()
    {
        return $this->belongsTo('App\Models\Company');

    }
}

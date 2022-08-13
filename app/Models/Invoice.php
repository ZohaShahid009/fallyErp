<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{


    use HasFactory;
    protected $fillable =[
        'invoice_number','client_id','invoice_date','amount','balance','due_date','deposit_amount','discount','discount_type','private_notes','status',
    ];
    public function client()
    {
        return $this->belongsTo('App\Models\Company');

    }
    public function products()
    {
        return $this->hasMany('App\Models\InvoiceProduct');

    }
}

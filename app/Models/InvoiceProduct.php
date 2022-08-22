<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class InvoiceProduct extends Model
{
    // public function products() {
    //     return $this->hasMany('App\InvoiceProduct', 'invoice_id');
    // }
    use HasFactory;
    protected $fillable =[
        'product_id','invoice_id','item_name','item_description','unit_cost','quantity','line_total',
    ];
    public function invoice() {
        return $this->belongsTo('App\Models\Invoice');
    }
}

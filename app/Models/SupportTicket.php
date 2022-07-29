<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;
    protected $fillable =[
        'status','type','from','queue','owner','project','client_name','clent_id','client_company','subject','description','image','reply','last_reply','notes',
    ];
}

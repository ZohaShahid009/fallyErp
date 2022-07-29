<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSettings extends Model
{
    use HasFactory;
    protected $fillable = ['smtp_protocol', 'smtp_host', 'smtp_username', 'smtp_password', 'smtp_port', 'smtp_security', 'unit' ,'discrption' ,'connection_timeout' , 'debug_mode',];
}

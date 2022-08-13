<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserManage extends Model
{
    use HasFactory;
    protected $fillable =[
        'first_Name','Last_name','email','Phone_Number','User_Type',
    ];
    
}

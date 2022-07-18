<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable =[
        'image','first_name','last_name','email','hourly_rate','phone','facebook_url','linkedin_url','skype_url','language_id','email_signature','diraction_id','department_id','is_administrator','password',
    ];
}

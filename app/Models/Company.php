<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable =[
        'company_name','primary_contact','company_email','	website_url','company_phone','vat_number','address','zip_code','city','country','state','facebook_url','','twitter_url','skype_url','linkedin_url','youtube_url','googleplus_url','Pinterest_url','company_size','company_logo','industry','email_signature',
    ];
}

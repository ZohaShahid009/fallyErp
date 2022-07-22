<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminfaq extends Model
{
    use HasFactory;
    protected $fillable =[
        'Category_id','Tittle','Discrption',
    ];
}

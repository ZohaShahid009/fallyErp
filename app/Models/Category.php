<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =[
        'image','title',
    ];

    public function category(){
        return $this->hasmany('App\Models\Category','id');
    }
}

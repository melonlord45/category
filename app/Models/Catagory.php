<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $fillable = [
        'name','slug','rank','image','short_description','description','meta_title','meta_keyword','meta_description','status','created_by','updated_by'
    ];
    use HasFactory;
}

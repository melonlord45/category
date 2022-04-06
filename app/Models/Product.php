<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','catagory_id','subcatagory_id','slug','code','short_description','description','price','quantity','stock','feature_key','flash_key','meta_title','meta_keyword','meta_description','status','created_by','updated_by'
    ];
    use HasFactory;
    public function catagory(){
        return $this->belongsTo(Catagory::class);
    }
    public function subcatagory(){
        return $this->belongsTo(SubCatagory::class);
    }
}

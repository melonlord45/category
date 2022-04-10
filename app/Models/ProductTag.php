<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
 protected $fillable = ['name','product_id','tag_id'];
    use HasFactory;
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}


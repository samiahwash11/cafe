<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_id',//التثصنيف الرئيسي(Category)
        'name',
        'price',
        'photo'
    ];
    public function category(){
        return $this->belongsTo(ProductCategory::class,'category_id');
    }

}

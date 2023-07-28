<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productss extends Model
{
    use HasFactory;

    protected $table = 'productss';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function Brand() {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function ProductCategory() {
        return $this->belongsTo(ProductCategory::class,'product_category_id','id');
    }
    public function ProductImages() {
        return $this->hasMany(ProductImage::class, 'product_id','id');
    }
    public function ProductDetails() {
        return $this->hasMany(ProductDetail::class, 'product_id','id');
    }
    public function ProductComments() {
        return $this->hasMany(ProductComment::class, 'product_id','id');
    }
    public function OrderDetails() {
         return $this->hasMany(OrderDetail::class,'product_id','id');
    }
}

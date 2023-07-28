<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function Productss() {
        return $this->hasMany(Productss::class,'product_category_id','id');
    }
}

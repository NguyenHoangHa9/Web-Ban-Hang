<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    protected $table = 'blog_comments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function Blog(){
        return $this->belongsTo(Blog::class,'blog_id','id');
    }
}
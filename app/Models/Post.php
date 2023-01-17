<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'content', 'slug', 'cover_image'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

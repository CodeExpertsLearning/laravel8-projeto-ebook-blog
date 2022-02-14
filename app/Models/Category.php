<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\{SlugOptions, HasSlug};

class Category extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'name', 
        'description', 
        'slug'
    ];

    public function getSlugOptions() : SlugOptions
	{
		return SlugOptions::create()
		                  ->generateSlugsFrom('name')
		                  ->saveSlugsTo('slug');
	}

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_categories');
    }
}

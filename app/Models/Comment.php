<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = ['comment', 'status'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

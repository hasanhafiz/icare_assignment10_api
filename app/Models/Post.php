<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'body', 'user_id', 'category_id'];
    
    public function user(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
    
    public function category(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
}

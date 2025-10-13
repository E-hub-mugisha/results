<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image',
        'status',
    ];

    // Relationship with User (One Post is authored by one User)
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'productDiscription',
        'img',
    ];

    public function User()
    {
        return $this->belongsTo(User::class)->first();
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

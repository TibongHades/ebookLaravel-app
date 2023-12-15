<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'content','cover_image', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'user_books');
    // }

    // public function content()
    // {
    //     return $this->hasOne(BookContent::class);
    // }
}

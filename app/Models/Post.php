<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'singkat', 'body'];
    protected $guarded = ['id'];

    // menghubungkan tabel post dengan tabel category atau istilahnya relasi dengan cara one to one (belongsTo)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // menghubungkan tabel user ke halaman post
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

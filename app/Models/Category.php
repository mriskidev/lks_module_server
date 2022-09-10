<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // menghubungka tabel category ke tabel post atau istilahnya relasi dengan one to many
    public function posts(){
        return $this->hasMany(Post::class);
    }
}

<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore exercitationem amet sapiente animi veniam ad dolor facere voluptatem! Vero alias accusamus dolorum cupiditate temporibus culpa tempore commodi unde asperiores. Saepe!'
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore exercitationem amet sapiente animi veniam ad dolor facere voluptatem! Vero alias accusamus dolorum cupiditate temporibus culpa tempore commodi unde asperiores. Saepe!'
        ]
   ];

   public static function all()
   {
    return collect(self::$blog_posts);
   }

   public static function find($slug)
   {
    $posts = static::all()  ;

    return $posts->firstWhere('slug', $slug);
   }
}

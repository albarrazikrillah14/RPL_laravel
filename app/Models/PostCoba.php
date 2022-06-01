<?php

namespace App\Models;


class Post{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-pertama",
            "author" => "Albarra Zikrillah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quisquam doloribus quod placeat inventore ipsum amet est dolorem quis quasi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-kedua",
            "author" => "Albarra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quisquam doloribus quod placeat inventore ipsum amet est dolorem quis quasi."
        ]
    ];
    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        // sama dengan fungsi diatas
        return $posts->firstWhere('slug', $slug);
    }
}

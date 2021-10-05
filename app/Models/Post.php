<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title1" => "Konten1",
            "title2" => "Konten2",
            "title3" => "Konten3",
            "title4" => "Konten4",
            "title5" => "Konten5"
        ],
    ];

    public static function all()
    {
        return self::$blog_posts;
    }
}

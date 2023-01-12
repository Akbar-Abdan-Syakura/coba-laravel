<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "Akbar",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci cum natus quod doloremque nam eum minima harum, assumenda explicabo a earum neque maiores vel saepe illum veritatis itaque temporibus enim dolore quibusdam nobis illo? Dolore eaque, unde culpa nesciunt incidunt rem. Praesentium sint est quaerat velit eaque natus odit dignissimos nisi quas, molestias aut dolorem excepturi laudantium nihil consequuntur ducimus impedit distinctio asperiores esse eius iste perspiciatis quod? Eligendi in itaque repellendus nisi quis amet ex commodi iste temporibus ab."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-posts-kedua",
            "author" => "Sandika",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci cum natus quod doloremque nam eum minima harum, assumenda explicabo a earum neque maiores vel saepe illum veritatis itaque temporibus enim dolore quibusdam nobis illo? Dolore eaque, unde culpa nesciunt incidunt rem. Praesentium sint est quaerat velit eaque natus odit dignissimos nisi quas, molestias aut dolorem excepturi laudantium nihil consequuntur ducimus impedit distinctio asperiores esse eius iste perspiciatis quod? Eligendi in itaque repellendus nisi quis amet ex commodi iste temporibus ab."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "akbar",
        "email" => "akbar@gmail.com",
        "img" => "download.jpg",
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman sinlge post

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Ini Single Post",
        "post" => $new_post
    ]);
});

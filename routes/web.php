<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Akbar",
        "email" => "akbaralfauzi0409@gmail.com",
        "image" => "me.jpeg"
        
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Post Pertama Saya",
            "slug" => "post-pertama-saya",
            "author" => "Akbar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores amet sint vel quas enim soluta. Iure quo reprehenderit cupiditate quaerat minus doloremque corporis et eveniet itaque dolorum tempore cum modi illo possimus aspernatur voluptates dignissimos exercitationem mollitia, iste aperiam hic numquam rerum suscipit recusandae. Suscipit libero, eum natus doloribus similique, cum assumenda dicta amet et ipsum accusantium pariatur iure repellendus dolor, sint asperiores quos tenetur iste illo. Ea numquam ratione dolorem provident suscipit unde iusto, omnis error, minus, veniam amet!"
        ],
        [
            "title" => "Post Kedua Saya",
            "slug" => "post-kedua-saya",
            "author" => "Akbar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus obcaecati accusantium soluta quibusdam repellendus non saepe molestias alias laudantium, ab dolorem unde est quas, cumque voluptate dolores praesentium numquam cupiditate voluptas libero beatae. Ea iste facere dolores obcaecati veniam ratione debitis. Provident ea consequuntur quisquam nisi natus tenetur blanditiis ut aliquam, consectetur expedita ipsa cumque sapiente eveniet optio rem accusantium. Ipsa suscipit modi voluptatum qui soluta facilis molestiae beatae perferendis. Quos repellat ullam vero doloribus. Aspernatur, placeat molestiae a temporibus quas earum atque quaerat culpa veritatis eveniet distinctio, obcaecati esse nulla voluptatem eos necessitatibus dolorum dolore itaque, odio incidunt laborum."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Post Pertama Saya",
            "slug" => "post-pertama-saya",
            "author" => "Akbar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores amet sint vel quas enim soluta. Iure quo reprehenderit cupiditate quaerat minus doloremque corporis et eveniet itaque dolorum tempore cum modi illo possimus aspernatur voluptates dignissimos exercitationem mollitia, iste aperiam hic numquam rerum suscipit recusandae. Suscipit libero, eum natus doloribus similique, cum assumenda dicta amet et ipsum accusantium pariatur iure repellendus dolor, sint asperiores quos tenetur iste illo. Ea numquam ratione dolorem provident suscipit unde iusto, omnis error, minus, veniam amet!"
        ],
        [
            "title" => "Post Kedua Saya",
            "slug" => "post-kedua-saya",
            "author" => "Akbar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus obcaecati accusantium soluta quibusdam repellendus non saepe molestias alias laudantium, ab dolorem unde est quas, cumque voluptate dolores praesentium numquam cupiditate voluptas libero beatae. Ea iste facere dolores obcaecati veniam ratione debitis. Provident ea consequuntur quisquam nisi natus tenetur blanditiis ut aliquam, consectetur expedita ipsa cumque sapiente eveniet optio rem accusantium. Ipsa suscipit modi voluptatum qui soluta facilis molestiae beatae perferendis. Quos repellat ullam vero doloribus. Aspernatur, placeat molestiae a temporibus quas earum atque quaerat culpa veritatis eveniet distinctio, obcaecati esse nulla voluptatem eos necessitatibus dolorum dolore itaque, odio incidunt laborum."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});


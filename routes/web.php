<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Ivan Alissetiyan',
            'body' => 'It is a long established fact that a reader will be distracted by the readable content
            of a
            page when looking
            at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
            as opposed to using, making it look like readable English. Many desktop
            publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
            will uncover many web sites still in their infancy. Various versions have evolved over the
            years, sometimes by accident, sometimes on purpose (injected humour and the like)'
        ],

        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Dinna Anggia Suheri',
            'body' => 'is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley 
            of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
            into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of 
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
            including versions of Lorem Ipsum'
        ],

        [
            'id' => 3,
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Almira NuraAzizah',
            'body' => 'is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley 
            of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
            into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of 
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
            including versions of Lorem Ipsum'
        ],

        [
            'id' => 4,
            'slug' => 'judul-artikel-4',
            'title' => 'Judul Artikel 4',
            'author' => 'Khairunnisa Azizah',
            'body' => 'is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley 
            of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
            into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of 
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
            including versions of Lorem Ipsum'
        ],
    ]]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Ivan Alissetiyan']);
});

Route::get('/posts/{slug}', function ($slug) {
   $posts = [
                    [
                        'id' => 1,
                        'slug' => 'judul-artikel-1',
                        'title' => 'Judul Artikel 1',
                        'author' => 'Ivan Alissetiyan',
                        'body' => 'It is a long established fact that a reader will be distracted by the readable content
                        of a
                        page when looking
                        at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                        as opposed to using, making it look like readable English. Many desktop
                        publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                        will uncover many web sites still in their infancy. Various versions have evolved over the
                        years, sometimes by accident, sometimes on purpose (injected humour and the like)'
                    ],

                    [
                        'id' => 2,
                        'slug' => 'judul-artikel-2',
                        'title' => 'Judul Artikel 2',
                        'author' => 'Dinna Anggia Suheri',
                        'body' => 'is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley 
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of 
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                        including versions of Lorem Ipsum'
                    ],

                    [
                        'id' => 3,
                        'slug' => 'judul-artikel-3',
                        'title' => 'Judul Artikel 3',
                        'author' => 'Almira NuraAzizah',
                        'body' => 'is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley 
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of 
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                        including versions of Lorem Ipsum'
                    ],

                    [
                        'id' => 4,
                        'slug' => 'judul-artikel-4',
                        'title' => 'Judul Artikel 4',
                        'author' => 'Khairunnisa Azizah',
                        'body' => 'is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley 
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of 
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                        including versions of Lorem Ipsum'
                    ],
            ];

    $post = Arr::first($posts, function ($post)  use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

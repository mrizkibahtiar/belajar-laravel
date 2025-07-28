<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Rizki Bahtiar', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Muhammad Rizki Bahtiar',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt optio consectetur
            tempore illum odio,
            incidunt obcaecati nobis consequuntur tenetur magnam cum rem reprehenderit odit sed impedit quia molestias
            quas? Quasi.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Muhammad Rizki Bahtiar',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nihil magni sequi
            delectus nisi minima asperiores sed, ullam possimus ab reprehenderit beatae eius cumque voluptatem, aperiam
            inventore provident, tenetur doloremque!'
            ],
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Muhammad Rizki Bahtiar',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt optio consectetur
            tempore illum odio,
            incidunt obcaecati nobis consequuntur tenetur magnam cum rem reprehenderit odit sed impedit quia molestias
            quas? Quasi.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Muhammad Rizki Bahtiar',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nihil magni sequi
            delectus nisi minima asperiores sed, ullam possimus ab reprehenderit beatae eius cumque voluptatem, aperiam
            inventore provident, tenetur doloremque!'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

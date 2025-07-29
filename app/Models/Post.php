<?php

// harus ditambahkan namespace agar bisa dipakai di tempat lain
namespace App\Models;


use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });


        // :: digunakan untuk mengakses static
        // keyword static digunakan untuk merujuk ke class ini sendiri / this
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}

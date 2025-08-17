<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// secara default gabungnya dengan tabel posts(jamak)
class Post extends Model
{

     // jika nama tabel beda pakai cara ini
    // protected $table = "blog_posts"; // versi jamaknya

    // secara default id, jika bukan id pakai cara ini
    // protected $primaryKey = "id";
    protected $fillable = ['title', 'author', 'slug', 'body'];
}

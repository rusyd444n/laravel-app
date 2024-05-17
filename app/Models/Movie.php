<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // kolom mana saja yang boleh di isi
    public $fillable = ['title','description','cover_url','trailer_url','viewer'];

    // kolom(field) mana saja yg boleh diperlihatkan
    public $visible = ['title','description','cover_url','trailer_url','viewer'];
}

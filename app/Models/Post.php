<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    // ბაზაში ვინახავთ ჯეისონად და ლარაველი თუ საჭირო იქნება გადაიყვანს არაის ჯეისონში
    protected $casts = [
        'body' => 'array',
    ];
}

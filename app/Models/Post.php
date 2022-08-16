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

    // Accessor უნდა იწყებოდეს გეთით და მთავრდებოდეს ატრიბუტით მასზე წვდომა გვაქვს შემდეგნაირად title_upper_case
    // Accessor მეშვეობით ბაზიდან მოგვაქვს რაიმე და შეგვიძლია მისი ისე დამუშავება როგორც ჩვენ გვინდა
    public function getTitleUpperCaseAttribute()
    {
        return strtoupper($this->title);
    }

    // Mutator უნდა იწყებოდეს სეტით და მთავრდებოდეს ატრიბუტით
    // Mutator სანამ ბაზაში შევინახავთ მანამდე ცვლის მნიშვნელობას
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable=[
        'title',
        'content'
    ];

    public static function boot(){
        parent::boot();

        static::creating(function($post){
            $post->slug = str_replace(' ', '-', $post->title);
        });
    }

    public function comments(){
        return $this->hasMany(Comment::class); //one to many 1 postingan punya banyak komen
    }

    public function totalKomen(){ //custom function
        return $this->comments()->count();
    }

    public function scopeActive($query) //alternatif query di controller
    {
        return $query->where('active', true);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function author(){
      return $this->belongsTo('App\Models\Author');
    }

    public function tags(){
      return $this->belongsToMany('App\Models\Tag', 'posts_has_tags');
    }

    public function category(){
      return $this->belongsTo('App\Models\Category');
    }

    public function comments() {
            return $this->hasMany(Comment::class);
        }
}

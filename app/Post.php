<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'html', 'markdown'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function category()
    {
        return $this->hasOne('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag');
    }
}

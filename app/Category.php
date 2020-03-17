<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
    ];
    public function articles()
    {
        return $this->belongsToMany(Article::class,'article_category');
    }
    public function getRouteKeyName()
    {
        return'title';
    }
}

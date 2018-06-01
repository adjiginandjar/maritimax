<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{


    protected $fillable = ['name'];

    protected $fillable = [
        'name', 'publish_status'
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');

    }
}

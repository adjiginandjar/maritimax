<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $hidden = ['created_at','updated_at'];

  public function categoryPost()
  {
      return $this->belongsTo('App\CategoryPost','category_id');

  }
  public function creator()
  {
      return $this->belongsTo('App\User','user_id');

  }

  public function getDate(){
    return $this->created_at->date;
  }
}

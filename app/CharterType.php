<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharterType extends Model
{
  public function cargos()
  {
      return $this->hasMany('App\Cargo');

  }
}

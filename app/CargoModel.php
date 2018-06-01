<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoModel extends Model
{

  protected $hidden = ['created_at','updated_at','publish_status'];

  protected $fillable = [
      'name', 'publish_status'
  ];
  
  public function cargos()
  {
      return $this->hasMany('App\Cargo');

  }
}

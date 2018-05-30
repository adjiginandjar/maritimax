<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User','user_id');

  }
  public function cargo()
  {
      return $this->belongsTo('App\Cargo','cargo_id');

  }
}

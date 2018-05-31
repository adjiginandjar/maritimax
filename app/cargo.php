<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
    protected $hidden = ['created_at','updated_at'];

    protected $dates = ['available_start','available_end'];

    public function imageCargos()
    {
        return $this->hasMany('App\ImageCargo');

    }
    public function cargoModel()
    {
        return $this->belongsTo('App\CargoModel');

    }
    public function categoryCargo()
    {
        return $this->belongsTo('App\CategoryCargo');

    }
    public function charterType()
    {
        return $this->belongsTo('App\CharterType');

    }

    public function getFirstImageAttribute(){
      return $this->imageCargos->first();
    }



}

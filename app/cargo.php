<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
    protected $hidden = ['created_at','updated_at'];

    protected $dates = ['available_start','available_end'];


    protected $fillable = [
      'name' ,
      'description' ,
      'city' ,
      'location' ,
      'price' ,
      'length' ,
      'width' ,
      'height' ,
      'curb_weight' ,
      'load_capacity' ,
      'available_capacity' ,
      'available_start' ,
      'available_end' ,
      'area_of_service' ,
      'flag' ,
      'year_build',
      'dimension' ,
      'booking_type' ,
      'cargo_model_id' ,
      'charter_type_id' ,
      'booking_status' ,
      'publish_status' ,
      'category_cargo_id' ,
    ];

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

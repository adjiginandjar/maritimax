<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
    protected $hidden = ['created_at','updated_at'];

    public function imageCargos()
    {
        return $this->hasMany('App\ImageCargo');

    }

    public function getFirstImageAttribute(){
      return $this->imageCargos->first();
    }

    

}

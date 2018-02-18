<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageCargo extends Model
{
    //
    protected $hidden = ['created_at','updated_at','cargo_id','id'];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    //

    public function toDetail()
    {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'description' => $this->description,
          'city' => $this->city,
          'location' => $this->location,
          'price' => $this->price,
          'length' => $this->length,
          'width' => $this->width,
          'height' => $this->height,
          'curb_weight' => $this->crub_weight,
          'load_capacity' => $this->load_capacity,
          'available_start' => $this->available_start,
          'available_end' => $this->available_end,
          'booking_type' => $this->booking_type,
          'booking_status' => $this->booking_status,
        ];
    }

    public function toList()
    {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'description' => $this->description,
          'city' => $this->city,
          'location' => $this->location,
          'available_start' => $this->available_start,
          'available_end' => $this->available_end,
          'booking_type' => $this->booking_type,
          'booking_status' => $this->booking_status,
        ];
    }
}

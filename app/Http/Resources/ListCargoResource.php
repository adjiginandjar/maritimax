<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\ImageCargo;
use App\CargoModel;

class ListCargoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'description' => $this->description,
          'city' => $this->city,
          'location' => $this->location,
          'price' => $this->price,
          'available_start' => $this->available_start,
          'available_end' => $this->available_end,
          'booking_type' => $this->booking_type,
          'booking_status' => $this->booking_status,
          'cargo_model' => $this->cargoModel->name,
          'load_capacity' => $this->load_capacity,
          'available_capacity' => $this->available_capacity,
          'image_cargo'=> $this->first_image->img_url,
        ];
    }
}

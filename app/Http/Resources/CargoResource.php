<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\ImageCargo;

class CargoResource extends JsonResource
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
          'cargo_model' => $this->cargoModel->name,
          'cargo_category' => $this->categoryCargo->name,
          'charter_type' => $this->charterType->name,
          'description' => $this->description,
          'city' => $this->city,
          'location' => $this->location,
          'price' => $this->price,
          'length' => $this->length,
          'width' => $this->width,
          'height' => $this->height,
          'area_of_service' => $this->area_of_service,
          'flag' => $this->flag,
          'year_build' => $this->year_build,
          'dimension'=> $this->dimension,
          'curb_weight' => $this->crub_weight,
          'load_capacity' => $this->load_capacity,
          'available_start' => $this->available_start,
          'available_end' => $this->available_end,
          'booking_type' => $this->booking_type,
          'booking_status' => $this->booking_status,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\ImageCargo;
use Carbon\Carbon;

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
          'cargo_model' => $this->cargoModel!= null ? $this->cargoModel->name : '-',
          'cargo_category' => $this->categoryCargo != null ? $this->categoryCargo->name : '-',
          'charter_type' => $this->charterType != null ? $this->charterType->name : '-',
          'description' => $this->description,
          'city' => $this->city,
          'location' => $this->location,
          'price' => $this->price != null ? number_format($this->price,0,".",".") : '-',
          'length' => $this->length,
          'width' => $this->width != null ? $this->width : '-',
          'height' => $this->height != null ? $this->height : '-',
          'area_of_service' => $this->area_of_service != null ? $this->area_of_service : '-',
          'flag' => $this->flag != null ? $this->flag : '-',
          'year_build' => $this->year_build != null ? $this->year_build : '-',
          'dimension'=> $this->dimension != null ? $this->dimension :'-',
          'curb_weight' => number_format($this->curb_weight,0,".","."),
          'load_capacity' => number_format($this->load_capacity,0,".","."),
          'available_capacity' => number_format($this->available_capacity,0,".","."),
          'available_start' => (new Carbon($this->available_start))->format('d M Y'),
          'available_end' => (new Carbon($this->available_end))->format('d M Y'),
          'booking_type' => $this->booking_type,
          'booking_status' => $this->booking_status,
          'img_cargos' => $this->imageCargos,
        ];
    }
}

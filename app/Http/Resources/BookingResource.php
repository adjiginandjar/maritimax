<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\ImageCargo;

class BookingResource extends JsonResource
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
          'capacity' => $this->capacity,
          'destination_from' => $this->destination_from,
          'destination_to' => $this->destination_to,
          'date' => $this->date,
          'cargo' => $this->cargo,
          'booking_status'=>$this->booking_status,
        ];
    }
}

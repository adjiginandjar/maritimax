<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListBookingResource extends JsonResource
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
            'created_at' => $this->created_at,
            'cargo' => $this->cargo->name,
            'booking_status'=>$this->booking_status,
          ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use App\ImageCargo;
use App\CargoModel;
use Carbon\Carbon;

class ListCargoSearchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //$img = ;
        // info($this->image_cargo);
        return [
          'id' => $this->id,
          'name' => $this->name,
          'description' => $this->description,
          'city' => $this->city,
          'location' => $this->location,
          'price' => number_format($this->price,0,".","."),
          'available_start' => (new Carbon($this->available_start))->format('d M Y'),
          'available_end' => (new Carbon($this->available_end))->format('d M Y'),
          'booking_type' => $this->booking_type,
          'booking_status' => $this->booking_status,
          'cargo_model' => $this->cargo_model,
          'load_capacity' => number_format($this->load_capacity,0,".","."),
          'available_capacity' => number_format($this->available_capacity,0,".","."),
          'image_cargo' => $this->when(true, function () {
              $img = DB::table('image_cargos')->select('image_cargos.img_url')->where('cargo_id', '=', $this->id);
              info($img->exists());
              if($img->exists()){
                return $img->first()->img_url;//DB::table('image_cargos')->select('image_cargos.img_url')->where('cargo_id', '=', $this->id)->first()->img_url;
              }else{
                return $img->first();
              }

          }),
          // 'image_cargo'=> DB::table('image_cargos')->select('image_cargos.img_url')->where('cargo_id', '=', $this->id)->first(),
        ];
    }
}

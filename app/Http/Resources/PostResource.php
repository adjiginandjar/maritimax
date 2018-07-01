<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class PostResource extends JsonResource
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
          'id'=> $this->id,
          'title'=> $this->title,
          'body'=> $this->body,
          'slug'=> $this->slug,
          'publish_status'=> $this->publish_status,
          'category_name'=> $this->categoryPost->name,
          'img_cover'=> $this->img_cover,
          'user_name'=> $this->creator->name,
        ];
    }
}

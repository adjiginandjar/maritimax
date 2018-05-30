<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Post;
use App\User;

class ListPostResource extends JsonResource
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
          'body' => $this->body,
          'slug' => $this->slug,
          'category_post' => $this->categoryPost->name,
          'img_cover' => $this->img_cover,
          'creator' => $this->creator->name,
        ];
    }
}

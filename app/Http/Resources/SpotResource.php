<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SpotResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'movie_title' => $this->movie_title,
            'youtube_id' => $this->youtube_id,
            'tag' => $this->tag,
            'start_seconds' => $this->start_seconds,
            'lat' => $this->lat,
            'lon' => $this->lon,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
            'deleted_at' => $this->deleted_at
        ];
        // parent::toArray($request);
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StartupResource extends JsonResource
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
            'ID -> ' => $this->resource->id,
            'Naziv startup-a -> ' => $this->resource->naziv,
            'Projektant -> ' => $this->resource->projektant,
            'Godina završetka -> ' => $this->resource->godina
        ];
    }
}

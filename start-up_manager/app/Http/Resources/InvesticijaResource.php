<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvesticijaResource extends JsonResource
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
            'Vrednost investicije -> ' => $this->resource->vrednost,
            'Kreditno finansiranje -> ' => $this->resource->kredit,
            'Investitor -> ' => new InvestitorResource($this->resource->investitor),
            'Startup -> ' => new StartupResource($this->resource->startup)
        ];
    }
}

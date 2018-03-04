<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rate extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
                'id' => $this->id,
                'duration' => $this->duration,
                'price' => $this->price,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at 
            ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Garage extends JsonResource
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
                'garage_name' => $this->garage_name,
                'total_spaces' => $this->total_spaces,
                'occupied_spaces' => $this->occupied_spaces,
                'space_remaining' => $this->total_spaces-$this->occupied_spaces,
                'entrance' => $this->entrance,
                'exit' => $this->exit,
                // 'created_at' => $this->created_at,
                'updated_at' => $this->updated_at 
            ];
    }

    public function with($request) {
        return [
            'valid_as_of' => date('D, d M Y H:i:s')

        ];
    }


}

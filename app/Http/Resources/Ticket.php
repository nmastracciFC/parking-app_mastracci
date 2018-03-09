<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ticket extends JsonResource
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
            'has_paid' => $this->has_paid,
            'user_id' => $this->user_id,
            'garage_id' => $this->garage_id,
            // 'user'=>$this->user,
            // 'garage' =>$this->garage
            

        ];
    }
}

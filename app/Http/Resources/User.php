<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'fname' => $this->fname,
            'lname' => $this->lname,
            'email' => $this->email,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at, 
            'tickets' => $this->tickets,
            'cars'=>$this->cars

        ];
    }
}

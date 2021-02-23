<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
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
            "id" => $this->id,            
            "name" => $this->name,
            "type" => $this->type,
            "dob" => $this->date_of_birth,
            "weight" => $this->Weight,
            "height" => $this->Height,
            "biteyness" => $this->Biteyness,
            "owner_name" => $this->owner->fullName()
        ];
    }
}

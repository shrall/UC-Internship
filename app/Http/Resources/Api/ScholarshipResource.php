<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ScholarshipResource extends JsonResource
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
            'name' => $this->name,
            'grade' => $this->grade,
            'duration' => $this->duration,
            'minimum_gpa' => $this->minimum_gpa,
            'hps' => $this->hps,
        ];
    }
}

<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'description' => $this->description,
            'deadline' => $this->deadline,
            'status' => $this->status,
            'category' => $this->category,
            'period_id' => $this->period_id,
            'supervisor_id' => $this->supervisor_id
        ];
    }
}

<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
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
            'duration' => $this->duration,
            'status' => $this->status,
            'progresses' => ProgressResource::collection($this->progresses)
        ];
    }
}

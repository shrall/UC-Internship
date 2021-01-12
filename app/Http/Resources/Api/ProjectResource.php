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
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'deadline' => $this->deadline,
            'status' => $this->status,
            'category' => $this->category,
            'applicants' => ProjectUserResource::collection($this->projectusers),
            'attachments' => $this->attachments,
            'period' => $this->period,
            'supervisor' => SupervisorResource::make($this->supervisor),
        ];
    }
}

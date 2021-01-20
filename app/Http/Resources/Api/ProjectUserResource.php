<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectUserResource extends JsonResource
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
            'user' => StudentResource::make($this->user),
            'user_id' => $this->uci_user_id,
            'project_id' => $this->uci_project_id,
            'status' => $this->status,
            'tasks' => TaskResource::collection($this->tasks),
        ];
    }
}

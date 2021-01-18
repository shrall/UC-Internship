<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ProgressResource extends JsonResource
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
            'description' => $this->description,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'status' => $this->status,
            'comment' => $this->comment,
            'attachments' => $this->attachments,
        ];
    }
}

<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class SupervisorResource extends JsonResource
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
            'nip' => $this->nip,
            'name' => $this->name,
            'email' => $this->email,
            'description' => $this->description,
            'photo' => $this->photo,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'line_account' => $this->line_account,
            'department' => $this->department->name,
            'title' => $this->title->name,
        ];
    }
}

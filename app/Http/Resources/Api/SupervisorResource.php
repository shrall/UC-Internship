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
            'user_id' => $this->id,
            'nip' => $this->detailable->nip,
            'name' => $this->detailable->name,
            'email' => $this->detailable->email,
            'description' => $this->detailable->description,
            'photo' => $this->detailable->photo,
            'gender' => $this->detailable->gender,
            'phone' => $this->detailable->phone,
            'line_account' => $this->detailable->line_account,
            'department_name' => $this->detailable->department->name,
            'department_initial' => $this->detailable->department->initial,
            'title' => $this->detailable->title->name,
        ];
    }
}

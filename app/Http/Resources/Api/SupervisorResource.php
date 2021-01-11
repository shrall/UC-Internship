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
            'user_id' => $this->user->id,
            'nip' => $this->nip,
            'name' => $this->name,
            'email' => $this->email,
            'description' => $this->description,
            'photo' => $this->photo,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'line_account' => $this->line_account,
            'department_name' => $this->department->name,
            'department_initial' => $this->department->initial,
            'title' => $this->title->name,
        ];
    }
}

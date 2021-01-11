<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'nim' => $this->nim,
            'name' => $this->name,
            'email' => $this->email,
            'batch' => $this->batch,
            'description' => $this->description,
            'photo' => $this->photo,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'line_account' => $this->line_account,
            'department_name' => $this->department->name,
            'department_initial' => $this->department->initial,
            'info' => InfoResource::make($this->user->info),
        ];
    }
}

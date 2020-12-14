<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'deadline', 'duration', 'is_approved', 'pu_id'
    ];

    public function progress() {
        return $this->hasMany(Progress::class, 'task_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectUser extends Pivot
{
    use HasFactory;

    public function task(){
        return $this->hasMany(Task::class, 'task_id', 'id');
    }
}

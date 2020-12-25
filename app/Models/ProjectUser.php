<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectUser extends Pivot
{
    use HasFactory;

    protected $table = 'uci_project_user';

    public function tasks(){
        return $this->hasMany(Task::class, 'pu_id', 'id');
    }

    public function project() {
        return $this->belongsTo(Project::class, 'uci_project_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'uci_user_id', 'id');
    }
}

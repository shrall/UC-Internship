<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Period;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'uci_projects';

    protected $fillable = [
        'name', 'description', 'deadline', 'status', 'category', 'period_id', 'supervisor_id'
    ];

    public function attachments() {
        return $this->hasMany(ProjectAttachment::class, 'project_id', 'id');
    }
    public function period(){
        return $this->belongsTo(Period::class, 'period_id', 'id');
    }
    public function supervisor(){
        return $this->belongsTo(User::class, 'supervisor_id', 'id');
    }
    public function projectusers() {
        return $this->hasMany(ProjectUser::class, 'uci_project_id', 'id');
    }
    public function works() {
        return $this->belongsToMany(User::class, 'uci_project_user', 'uci_project_id', 'uci_user_id')->withPivot('status')->withTimestamps();
    }
}

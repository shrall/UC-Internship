<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Period;

class Project extends Model
{
    use HasFactory;

    protected $table = 'uci_projects';

    protected $fillable = [
        'name', 'description', 'deadline', 'status', 'category', 'period_id', 'supervisor_id'
    ];

    public function attachment() {
        return $this->hasMany(ProjectAttachment::class, 'project_id', 'id');
    }
    public function period(){
        return $this->belongsTo(Period::class, 'period_id', 'id');
    }
    public function supervisor(){
        return $this->belongsTo(User::class, 'supervisor_id', 'id');
    }
}

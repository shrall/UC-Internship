<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'deadline', 'status', 'category', 'period_id'
    ];

    public function attachment() {
        return $this->hasMany(ProjectAttachment::class, 'project_id', 'id');
    }
    public function period(){
        return $this->belongsTo(Period::class, 'period_id', 'id');
    }
    public function applies() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}

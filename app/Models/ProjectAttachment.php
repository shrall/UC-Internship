<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectAttachment extends Model
{
    use HasFactory;

    protected $table = 'uci_project_attachments';

    protected $fillable = [
        'name', 'project_id'
    ];

    public function project(){
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}

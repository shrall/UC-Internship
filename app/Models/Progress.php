<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $table = 'uci_progress';

    protected $fillable = [
        'description', 'time_start', 'time_end', 'is_approved', 'comment', 'task_id'
    ];

    public function attachment() {
        return $this->hasMany(ProgressAttachment::class, 'progress_id', 'id');
    }
    public function task(){
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }
}

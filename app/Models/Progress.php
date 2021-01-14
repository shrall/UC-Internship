<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Progress extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'uci_progress';

    protected $fillable = [
        'description', 'time_start', 'time_end', 'status', 'comment', 'task_id'
    ];

    public function attachments() {
        return $this->hasMany(ProgressAttachment::class, 'progress_id', 'id');
    }
    public function task(){
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }
}

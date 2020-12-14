<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'progress_id'
    ];

    public function progress(){
        return $this->belongsTo(Progress::class, 'progress_id', 'id');
    }
}

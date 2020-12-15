<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'uci_histories';

    protected $fillable = [
        'duration_before', 'duration_after', 'student_id', 'supervisor_id'
    ];

    public function student(){
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
    public function supervisor(){
        return $this->belongsTo(User::class, 'supervisor_id', 'id');
    }
}

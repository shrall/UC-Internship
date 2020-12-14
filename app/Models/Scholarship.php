<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'grade', 'duration', 'minimum_gpa', 'hps'
    ];

    public function info() {
        return $this->hasMany(Info::class, 'scholarship_id', 'id');
    }
}

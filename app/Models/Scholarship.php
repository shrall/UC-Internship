<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scholarship extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'uci_scholarships';

    protected $fillable = [
        'name', 'grade', 'duration', 'minimum_gpa', 'hps', 'status'
    ];

    public function infos() {
        return $this->hasMany(Info::class, 'scholarship_id', 'id');
    }
}

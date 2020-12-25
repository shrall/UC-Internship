<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $table = 'uci_scholarships';

    protected $fillable = [
        'name', 'grade', 'duration', 'minimum_gpa', 'hps'
    ];

    public function infos() {
        return $this->hasMany(Info::class, 'scholarship_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [
        'term', 'start', 'end'
    ];

    public function project() {
        return $this->hasMany(Project::class, 'period_id', 'id');
    }
}

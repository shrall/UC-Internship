<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $table = 'uci_periods';

    protected $fillable = [
        'term', 'start', 'end'
    ];

    public function projects() {
        return $this->hasMany(Project::class, 'period_id', 'id');
    }
}

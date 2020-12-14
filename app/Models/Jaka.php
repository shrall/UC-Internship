<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaka extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function lecturer() {
        return $this->hasOne(Lecturer::class, 'jaka_id', 'id');
    }
}

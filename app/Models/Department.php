<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'initial', 'name'
    ];

    public function student() {
        return $this->hasMany(Student::class, 'department_id', 'id');
    }
    public function lecturer() {
        return $this->hasMany(Lecturer::class, 'department_id', 'id');
    }
    public function staff() {
        return $this->hasMany(Staff::class, 'department_id', 'id');
    }
}

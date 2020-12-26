<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip', 'nidn', 'name', 'email', 'description', 'photo', 'gender', 'phone', 'line_account', 'department_id', 'title_id', 'jaka_id'
    ];

    public function user(){
        return $this->morphMany('App\Models\User', 'detailable');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function jaka()
    {
        return $this->belongsTo(Jaka::class, 'jaka_id', 'id');
    }
    public function title()
    {
        return $this->belongsTo(Title::class, 'title_id', 'id');
    }
}

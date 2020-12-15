<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'uci_infos';

    protected $fillable = [
        'time_remaining', 'gpa', 'cv', 'scholarship_id'
    ];

    public function info() {
        return $this->hasOne(User::class, 'info_id', 'id');
    }
    public function scholarship(){
        return $this->belongsTo(Scholarship::class, 'scholarship_id', 'id');
    }
}

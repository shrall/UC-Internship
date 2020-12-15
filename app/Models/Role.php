<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'uci_roles';

    protected $fillable = [
        'name'
    ];

    public function user() {
        return $this->belongsToMany(User::class, 'uci_role_user', 'uci_role_id', 'uci_user_id')->withTimestamps();
    }
}

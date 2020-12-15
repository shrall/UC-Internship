<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'uci_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password', 'is_login', 'detailable_id', 'detailable_type', 'info_id'
    ];

    public function detailable(){
        return $this->morphTo();
    }

    public function student() {
        return $this->hasMany(History::class, 'student_id', 'id');
    }
    public function supervisor() {
        return $this->hasMany(History::class, 'supervisor_id', 'id');
    }
    public function info(){
        return $this->belongsTo(Info::class, 'info_id', 'id');
    }
    public function user() {
        return $this->belongsToMany(Role::class, 'uci_role_user', 'uci_user_id', 'uci_role_id')->withTimestamps();
    }
    public function applies() {
        return $this->belongsToMany(Project::class, 'uci_project_user', 'uci_user_id', 'uci_project_id')->withPivot('status')->withTimestamps();
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

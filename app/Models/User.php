<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'uci_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password', 'is_login',
        'role_id', 'detailable_id', 'detailable_type', 'info_id'
    ];

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



    public function detailable(){
        return $this->morphTo();
    }
    public function role() {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    public function students() {
        return $this->hasMany(History::class, 'student_id', 'id');
    }
    public function supervisors() {
        return $this->hasMany(History::class, 'supervisor_id', 'id');
    }
    public function projectusers() {
        return $this->hasMany(ProjectUser::class, 'uci_user_id', 'id');
    }
    public function info(){
        return $this->belongsTo(Info::class, 'info_id', 'id');
    }
    public function applies() {
        return $this->belongsToMany(Project::class, 'uci_project_user', 'uci_user_id', 'uci_project_id')->withPivot('status')->withTimestamps();
    }
    public function history()
    {
        return $this->hasOne(History::class, 'student_id', 'id');
    }

    public function isAdmin()
    {
        if ($this->role->name == 'Admin' && $this->is_login == 1) {
            return true;
        }
        return false;
    }
    public function isSupervisor()
    {
        if ($this->role->name == 'Supervisor' && $this->is_login == 1) {
            return true;
        }
        return false;
    }
    public function isStudent()
    {
        if ($this->role->name == 'Student' && $this->is_login == 1) {
            return true;
        }
        return false;
    }
}

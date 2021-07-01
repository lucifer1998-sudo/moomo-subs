<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roles(){
        return $this -> hasMany(UserRole::class,'user_id','id');
    }

    /**
     * @return bool
     */
    public function isAdmin(){
        $roles = $this -> roles() -> where ('role_id',3) -> count();
        if ($roles > 0) return true;
        else return false;
    }
    public function isSuperAdmin(){
        $roles = $this -> roles() -> where ('role_id',1) -> count();
        if ($roles > 0) return true;
        else return false;
    }
    public function isSimpleUser(){
        $roles = $this -> roles() -> where ('role_id',2) -> count();
        if ($roles > 0) return true;
        else return false;
    }
}

<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'introduction', 'phone', 'gender', 'department_id', 'level_id', 'user_id', 'status'
    ];


    /**
     * Append fields
     *
     * @var array
     */
    public $appends = [
        'gender_text', 'status_text'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getStatusTextAttribute($value)
    {
        return $this->attributes['status'] ? '正常' : '禁用';
    }

    public function getGenderTextAttribute()
    {
        return $this->attributes['gender'] ? '男' : '女';
    }
}

<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // notifiable 是一个trait
    use Notifiable;
    // 闭包函数中 use 的作用是连接闭包与外界变量

    // 指定表名
    protected $table = 'users'; // 如果表名与模型名相对应,则无需指定,系统会默认给出这个表名

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}

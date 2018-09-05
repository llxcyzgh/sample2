<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable=['content'];

    // 用户表和状态表关联,一个用户对多个状态,一对多
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }



}

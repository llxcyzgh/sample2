<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    // create 显示增加用户页面
    public function create($value = '')
    {
        return view('users.create');
    }
}
//

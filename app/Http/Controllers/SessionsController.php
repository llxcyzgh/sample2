<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;// Auth 是 Illuminate\Support\Facades\Auth 的别名, 可见 app/config/app.php
//use Illuminate\Support\Facades\Auth;
class SessionsController extends Controller
{
    // 显示 创建sesssion---用户登陆 界面
    public function create()
    {
        return view('sessions.create');
    }

    // 执行 创建sesssion---用户登陆 动作
    public function store(Request $request)
    {
//        var_dump($request);
//        exit;
        $credentials = $this->validate($request,[
            'email'=>'required|email|max:255',
            'password'=>'required'
        ]);

        var_dump(Auth::attempt($credentials),$request->has('remember'));

        if(Auth::attempt($credentials)){
            // 登陆成功
            session()->flash('success','登陆成功, 欢迎回来~');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            // 登陆失败
            session()->flash('danger','sorry, 您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }

    }

    // 执行 删除sesssion---用户退出 动作
    public function destroy()
    {
        Auth::logout();
        session()->flash('success','您已经成功退出~');
        return redirect()->route('login');
//        redirect('login');
    }
}

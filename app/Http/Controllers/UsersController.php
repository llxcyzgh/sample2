<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // index 显示所有用户列表的页面
    public function index()
    {
        $users = User::all();
//        var_dump($users->toArray());
        $data_arr=[];
        foreach ($users as $user){
            $data_arr[] = $user->gravatar(80);
        }
        return view('users.index', compact('data_arr'));
    }

    // index 显示个人用户信息的页面
    public function show(User $user)
    {
        $data = $user->gravatar(80);
        return view('users.show', compact('data'));
    }

    // create 显示创建用户页面
    public function create()
    {
        return view('users.create');
    }

    // store 执行创建用户到数据库的动作
    public function store(Request $request)
    {
//        var_dump($request->all());
        $this->validate($request, [
//            'name'=>'required|min:6|max:50',
            'name'     => function ($attribute, $value, $fail) {
                if (!preg_match('/^[a-zA-Z][0-9a-zA-Z]{5,49}$/', $value)) {
                    return $fail('名称' . '由字母和数字组成(长度在6至50之间),且只能以字母开头');
                }
            },
            'email'    => 'required|email|unique:users|max:255',
            // unique:users 表示要验证的字段在给定的数据表中要唯一
            'password' => 'required|confirmed|min:8|max:50',
        ]);
//        var_dump($request->all());
        $user  = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        session()->flash('success','恭喜您, 注册成功~');
        return redirect()->route('users.show',$user);

    }

    // edit 显示编辑用户个人资料的页面
    public function edit()
    {
        return view('users.edit');
    }

    // update 执行更新用户资料的动作
    public function update()
    {

    }

    // destroy 执行删除用户资料的动作
    public function destroy()
    {

    }

    // 从数据库获取用户个人信息
    public function getUserInfo(User $user)
    {
        $data = $user->gravatar(80);
        // var_dump($data);
        return view('users.show', compact('data', 'user'));
    }

    public function tt()
    {
//        $url = parse_url('postgres://dsdyjrmwuailar:0e00d595fcbfc73a37d71c8ca4bbf0a73eccd746f444f203b461a89d2cef456c@ec2-107-22-221-60.compute-1.amazonaws.com:5432/ddrlf640s73912');
//        var_dump($url);
        var_dump(__DIR__);
        var_dump(__FILE__);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    // 构造函数添加中间件
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index', 'show', 'create', 'store']
        ]);
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }


    // index 显示所有用户列表的页面
    public function index()
    {
//        $users = User::all();
        $users = User::paginate(10);

//        $data_arr = [];
//        foreach ($users as $user) {
//            $data_arr[] = $user->gravatar(80);
//        }
//        return view('users.index', compact('data_arr'));

        return view('users.index', compact('users'));
    }

    // index 显示个人用户信息的页面
    public function show(User $user)
    {
//        if(Auth::check()){
//            return view('users.show', compact('user'));
//        }else{
//            return redirect('login');
//        }

//        $data = $user->gravatar(80);
//        return view('users.show', $data);

        return view('users.show', compact('user'));
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
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Auth::login($user);
        session()->flash('success', '恭喜您, 注册成功~');
        return redirect()->route('users.show', $user);

    }

    // edit 显示编辑用户个人资料的页面
    public function edit(User $user)
    {
        try {
            $this->authorize('update', $user);
        } catch (AuthorizationException $e) {
            return abort('403', '无权访问 -- 哼 想乱改别人的信息,没门~');
//            return '无权访问';
        }
        return view('users.edit', compact('user'));
    }

    // update 执行更新用户资料的动作
    public function update(User $user, Request $request)
    {
        try {
            $this->authorize('update', $user);
        } catch (AuthorizationException $e) {
            return abort('403', '无权访问 -- 哼 想乱改别人的信息,没门~');
//            return '无权访问';
        }

        $this->validate($request, [
            'name'     => function ($attribute, $value, $fail) {
                if (!preg_match('/^[a-zA-Z][0-9a-zA-Z]{5,49}$/', $value)) {
                    return $fail('名称' . '由字母和数字组成(长度在6至50之间),且只能以字母开头');
                }
            },
            'password' => 'nullable|confirmed|min:8|max:50',
        ]);

        $data         = [];
        $data['name'] = $request->name;
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
//        var_dump($request->toArray());
//        exit;
        $user->update($data);

        session()->flash('success', '更新个人信息成功~');
        return redirect()->route('users.show', $user->id);

    }

    // destroy 执行删除用户资料的动作
    public function destroy(User $user)
    {
//        var_dump(123);exit;
        try{
            $this->authorize('destroy',$user);
        }catch (AuthorizationException $e){
            return abort('403', '无权访问 -- 哼 想乱改别人的信息,没门~');
        }

        $user->delete();
        session()->flash('success','成功删除用户~');
        return back();
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
        return view('tt');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Auth;
use Mail;

class UsersController extends Controller
{
    // 构造函数添加中间件
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index', 'show', 'create', 'store', 'confirmEmail']
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
        $statuses = $user->statuses()
            ->orderBy('created_at', 'desc')
            ->paginate(30);
        return view('users.show', compact('user', 'statuses'));
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

//        Auth::login($user);
        $this->sendEmailConfirmationTo($user);
        session()->flash('success', '验证邮件已发送到你的注册邮箱上，请注意查收~');
        return redirect('/ ');

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
        try {
            $this->authorize('destroy', $user);
        } catch (AuthorizationException $e) {
            return abort('403', '无权访问 -- 哼 想乱改别人的信息,没门~');
        }

        $user->delete();
        session()->flash('success', '成功删除用户~');
        return back();
    }

    // 从数据库获取用户个人信息
    public function getUserInfo(User $user)
    {
        $data = $user->gravatar(80);
        // var_dump($data);
        return view('users.show', compact('data', 'user'));
    }

    // 新用户邮箱验证
    public function confirmEmail($token)
    {
        $user = User::where('activation_token', $token)->firstOrFail();

        $user->activated        = true;
        $user->activation_token = null;
        $user->save();

        Auth::login($user);
        session()->flash('success', '恭喜,激活成功~');
        return redirect()->route('users.show', [$user]);
    }

    // 发送邮件(邮件为驱动为log时)
    public function sendEmailConfirmationTo2(User $user)
    {
        $view    = 'emails.confirm';
        $data    = compact('user');
        $from    = 'xcyz360@yeah.net';
        $name    = 'xcyz360';
        $to      = $user->email;
        $subject = 'sample 确认注册邮箱';

        Mail::send($view, $data, function ($message) use ($from, $name, $to, $subject) {
            $message->from($from, $name)->to($to)->subject($subject);
        });
    }

    // 发送邮件(邮件为驱动为smtp时)
    public function sendEmailConfirmationTo(User $user)
    {
        $view    = 'emails.confirm';
        $data    = compact('user');
        $to      = $user->email;
        $subject = 'sample 确认注册邮箱';

        Mail::send($view, $data, function ($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });
    }

    // 显示当前用户的明星页面
    public function getStars(User $user)
    {
        $users = $user->stars()->paginate(10);
        $title = '我关注的人';
        return view('users.show_stars',compact('users','title'));
    }

    // 显示当前用户的粉丝页面
    public function getFans(User $user)
    {
        $users = $user->fans()->paginate(10);
        $title = '我的粉丝';
        return view('users.show_stars',compact('users','title'));
    }


    public function tt()
    {
        $feed_items=[];
        if(Auth::check()){
            $feed_items = Auth::user()->feed()->paginate(30);
        }
        var_dump($feed_items[0]);
//        return view('static_pages/home',compact('feed_items'));
    }

}

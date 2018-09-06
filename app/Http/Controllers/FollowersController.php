<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class FollowersController extends Controller
{
    //执行 关注动作
    public function store(User $user)
    {
//        var_dump(123);
//        exit;
        // 当前登陆用户和要关注的用户不相同,且没有关注, 才允许执行关注动作
        // 虽然在前端页面已经作了判断,在后台依然要进行判断
        if (($user->id != Auth::user()->id) && !(Auth::user()->isFollowing($user))) {
            Auth::user()->follow($user->id);
        }
        return back();
    }

    //执行 取消关注动作
    public function destroy(User $user)
    {
//        var_dump(123);exit;
        // 当前登陆用户和要关注的用户不相同,且已经关注, 才允许执行取消关注动作
        // 虽然在前端页面已经作了判断,在后台依然要进行判断
        if (($user->id != Auth::user()->id) && (Auth::user()->isFollowing($user))) {
            Auth::user()->unfollow($user->id);
//            var_dump(123);exit;
        }
        return back();

    }
}

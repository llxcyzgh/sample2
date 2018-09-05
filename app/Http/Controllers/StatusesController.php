<?php

namespace App\Http\Controllers;

use App\Models\Status;
//use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class StatusesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',['except'=>[]]);
    }

    // 执行状态的创建操作
    public function store(Request $request)
    {
//        var_dump($request);
        $this->validate($request,[
            'content'=>'required|max:140',
        ]);
//        Status::create($request);  这是错误的方法, 因为没有关联用户
        Auth::user()->statuses()->create([
            'content'=>$request['content'],
        ]);

        return redirect()->back();
    }

    // 执行状态的删除操作
    public function destroy(Status $status)
    {
//        var_dump(123);exit;
        $this->authorize('destroy',$status);
        $status->delete();
        session()->flash('success','成功删除一条状态');
        return redirect()->back();
    }
}

{{--自己不能关注自己 或 取消关注自己, 所以当前登陆用户 Auth::user() 和 当前页面显示的用户相同时,不显示关注或取消关注按钮--}}
@if(Auth::check() && Auth::user()->id != $user->id)
    <div style="margin-bottom: 10px">
        {{-- 如果已经关注,则显示'取消关注'按钮,否则显示'关注'按钮 --}}
        @if(!(Auth::user()->isFollowing($user)))
            <form action="{{ route('followers.store',$user->id) }}" method="post">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">关注</button>
            </form>
        @else
            <form action="{{ route('followers.destroy',$user->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-danger">取消关注</button>
            </form>
        @endif
    </div>
@endif
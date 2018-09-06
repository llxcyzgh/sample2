<div>
    <ul class="list-inline">
        <li>
            <a href="{{route('stars',$user)}}">
                <h6>{{count($user->stars)}}</h6>
                <p>关注</p>
            </a>
        </li>
        <li>
            <a href="{{route('fans',$user)}}">
                <h6>{{count($user->fans)}}</h6>
                <p>粉丝</p>
            </a>
        </li>
        <li>
            <a href="{{route('users.show',$user)}}">
                <h6>{{count($user->statuses)}}</h6>
                {{--<h6>{{$user->statuses()->count()}}</h6>--}}
                <p>微博</p>
            </a>
        </li>

    </ul>
</div>
{{--一条状态模板--}}
<li class="list-group-item clearfix">
    {{--用户头像--}}
    {{--<a href="{{ route('users.show',$user->id) }}">--}}
    {{--@include('shared._user_info_img')--}}
    {{--</a>--}}

    {{--用户名--}}
    <div class="pull-left" style="width: 20%;">
        <div class="status-name">
            <a href="{{route('users.show',$user->id)}}">{{$user->name}}</a>
        </div>

        {{--该状态发表时间--}}
        <div class="status-time">
            <span style="font-size: 12px;">{{$status->created_at->diffForHumans()}}</span>
        </div>
    </div>

    {{--该状态内容--}}
    <div class="pull-right" style="width: 80%;">
        <div class="pull-left" style="width: 93%">
            {{$status->content}}
        </div>

        {{--只有作者本人才可见删除按钮--}}
        @can('destroy',$status)
            <div class="pull-right" style="width: 5%;">
                <form action="{{route('statuses.destroy',$status->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}

                    <button type="submit" class="btn">
                        <i class="glyphicon glyphicon-remove"></i>
                    </button>
                </form>
            </div>
        @endcan

    </div>


</li>
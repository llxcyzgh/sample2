{{-- 第一种写法, 把逻辑都写到视图里了,且有多次查询,降低效率
<a href="{{ route('users.show',$user->id) }}">
    @if(($user->gravatar())['url'])
        <img src="{{ ($user->gravatar(80))['url'] }}" alt="{{ $user->name }}" class="gravatar">
    @else
        <div style="margin:0;padding:0;display:inline-block;width: 80px;height: 80px;font-size: 60px;line-height: 80px;background-color: rgb({{($user->gravatar(80))['email_bgc_arr'][0]}},{{($user->gravatar(80))['email_bgc_arr'][1]}},{{($user->gravatar(80))['email_bgc_arr'][2]}});border-radius: 50%">
         <span style="color:white">{{ strtoupper(($user->name)[0]) }}</span>
        </div>
    @endif
</a>
<h1>{{ $user->name }}</h1>
--}}



{{-- 第二种写法,把逻辑写到控制器里,减少视图里面的逻辑代码 --}}
{{--
<a href="{{ route('users.show',$user->id) }}" class="user-info">
    @if($url)
        <img src="{{ $url }}" alt="{{ $user->name }}" class="gravatar">
    @else
        <div style="margin: 0 auto;width: 80px;height: 80px;font-size: 60px;line-height: 80px;background-color: rgb({{ $email_bgc_arr[0].','.$email_bgc_arr[1] .','.$email_bgc_arr[2]}});border-radius: 50%">
         <span style="color:white">{{ strtoupper($user->name[0]) }}</span>
        </div>
    @endif
</a>
<h1>{{ $data['user']->name }}</h1>
--}}

{{-- 第三种写法,调用 gravatar方法依然写在视图中 ,增加一个临时变量, 存储 $user->gravatar() 的结果, 方便后面的代码调用, 也避免了再次调用函数 --}}
{{--
<a href="{{ route('users.show',$user->id) }}" class="user-info">
    @php
        $data = $user->gravatar();
        $url = $data['url'];
        $email_bgc_arr = $data['email_bgc_arr'];
        $url = $data['url'];
    @endphp

    @if($url)
        <img src="{{ $url }}" alt="{{ $user->name }}" class="gravatar">
    @else
        <div style="margin: 0 auto;width: 80px;height: 80px;font-size: 60px;line-height: 80px;background-color: rgb({{ $email_bgc_arr[0].','.$email_bgc_arr[1] .','.$email_bgc_arr[2]}});border-radius: 50%">
            <span style="color:white">{{ strtoupper($user->name[0]) }}</span>
        </div>
    @endif
</a>
--}}

@include('shared._user_info_img')
<h1>{{ $user->name }}</h1>

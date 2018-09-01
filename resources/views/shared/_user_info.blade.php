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
<a href="{{ route('users.show',$data['user']->id) }}" class="user-info">
    @if($data['url'])
        <img src="{{ $data['url'] }}" alt="{{ $data['user']->name }}" class="gravatar">
    @else
        <div style="margin: 0 auto;width: 80px;height: 80px;font-size: 60px;line-height: 80px;background-color: rgb({{ $data['email_bgc_arr'][0].','.$data['email_bgc_arr'][1] .','.$data['email_bgc_arr'][2]}});border-radius: 50%">
         <span style="color:white">{{ strtoupper(($data['user']->name)[0]) }}</span>
        </div>
    @endif
</a>
<h1>{{ $data['user']->name }}</h1>

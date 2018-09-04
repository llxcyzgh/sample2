{{--<a href="{{ route('users.show',$user->id) }}" class="user-info">--}}
@php
    $data = $user->gravatar(80);
    $url = $data['url'];
    $email_bgc_arr = $data['email_bgc_arr'];
    $url = $data['url'];
@endphp

@if($url)
        <a href="http://gravatar.com/emails" target="_blank" title="去 gravatar.com 修改头像" class="user-info">
            <img src="{{ $url }}" alt="{{ $user->name }}" class="gravatar">
        </a>

@else
        <div class="text-center" style="display: inline-block;width: 80px;height: 80px;font-size: 60px;line-height: 80px;background-color: rgb({{ $email_bgc_arr[0].','.$email_bgc_arr[1] .','.$email_bgc_arr[2]}});border-radius: 50%;vertical-align: middle">
            <span style="color:white;">{{ strtoupper($user->name[0]) }}</span>
        </div>

@endif



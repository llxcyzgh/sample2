@foreach(['success','danger','warning','info'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{$msg}}">{{ session()->get($msg) }}</p>
        </div>
    @endif
@endforeach

{{--<div >--}}
    {{--<p class="alert alert-success" style="opacity: 1">-abcdffdfd---</p>--}}
{{--</div>--}}
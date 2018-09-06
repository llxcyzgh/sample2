@if(count($feed_items))
    <ol>
        {{ $feed_items->render() }}
        @foreach($feed_items as $status)
            {{--@include('statuses._status',['user'=>Auth::user()])--}}
            @include('statuses._status',['user'=>$status->user])
        @endforeach
        {{ $feed_items->render() }}
    </ol>


@endif

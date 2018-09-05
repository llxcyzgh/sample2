@if(count($feed_items))
    <ol>
        @foreach($feed_items as $status)
            @include('statuses._status',['user'=>Auth::user()])
        @endforeach
    </ol>
@endif
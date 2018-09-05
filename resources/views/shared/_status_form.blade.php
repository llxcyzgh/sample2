<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    
    {{ csrf_field() }}
    
    <div class="form-group">
        <textarea name="content" id="" cols="70" rows="4" placeholder="说点什么~" class="form-control">{{old('content')}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">发表状态</button>
</form>
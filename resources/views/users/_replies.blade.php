@if (count($replies))
    <ul class="user-reply">
        @foreach ($replies as $reply)
            <li class="user-reply__item">
                <a href="{{ $reply->topic->link(['#reply' . $reply->id]) }}" class="user-reply__title">
                    {{ $reply->topic->title }}
                </a>
                
                <div class="user-reply__content">
                    {!! $reply->content !!}
                </div>

                <div class="user-reply__time">
                    Reply on {{ $reply->created_at->diffForHumans() }}
                </div>
            </li>
        @endforeach
    </ul>
    {!! $replies->appends(Request::except('page'))->render() !!}
@else 
    <h3>Nothing yet!</h3>
@endif
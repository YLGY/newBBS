@if($topics->count())
    <ul class="media-list">
        @foreach($topics as $topic)
            <li class="media">
                <div class="media__left">
                    <a href="{{ route('users.show', [$topic->user_id]) }}">
                        <img src="{{ $topic->user->avatar }}" title="{{ $topic->user->name }}" class="media__avatar">
                    </a>
                </div>
                <div class="media__body">
                    <div class="media__heading">
                        <a href="{{ route('topics.show', [$topic->id]) }}" title="{{ $topic->title }}">
                            {{ $topic->title }}
                        </a>
                        <a href="{{ route('topics.show', [$topic->id]) }}">
                            <span class="media__reply-count">{{ $topic->reply_count }}</span>
                        </a>
                    </div>
                    <div class="media__content">
                        <a href="#" title="{{ $topic->category->name }}">
                            <span class="media__icon icon-folder-open"></span>
                            {{ $topic->category->name }}
                        </a>
                        <span class="media__span"> • </span>
                        <a href="{{ route('users.show', [$topic->user_id]) }}" title="{{ $topic->user->name }}">
                            <span class="media__icon icon-user"></span>
                            {{ $topic->user->name }}
                        </a>
                        <span class="media__span"> • </span>
                        <span class="media__icon icon-clock"></span>
                        <span class="media__time" title="Last modified">{{ $topic->updated_at->diffForHumans() }}</span>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@else
    <h3 class="text-center alert alert-info">Empty!</h3>
@endif
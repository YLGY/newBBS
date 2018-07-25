@if (count($topics))
    <ul class="topic-list">
        @foreach ($topics as $topic)
            <li class="topic-list__item">
                <a href="{{ route('topics.show', $topic->id) }}">
                    {{ $topic->title }}
                </a>
                <span class="topic-list__right">
                    {{ $topic->reply_count }} Replies
                    <span class="media__span"> • </span>
                    {{ $topic->created_at->diffForHumans() }}
                </span>
            </li>
        @endforeach
    </ul>
@else
    <div>Nothing yet</div>
@endif

{!! $topics->render() !!}
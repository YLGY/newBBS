<div class="reply__list">
    @foreach ($replies as $index => $reply)
        <div class="reply__item" name="reply{{ $reply->id }}" id="reply{{ $reply->id }}">
            <div class="reply__left">
                <div class="reply__avatar">
                    <a href="{{ route('users.show', [$reply->user_id]) }}">
                        <img src="{{ $reply->user->avatar }}" alt="{{ $reply->user->name }}" class="reply__avatar-img">
                    </a>
                </div>

                <div class="reply__heading">
                    <a href="{{ route('users.show', [$reply->user_id]) }}">
                        {{ $reply->user->name }}
                    </a>
                    <span> • </span>
                    <span class="reply__time">
                        {{ $reply->created_at->diffForHumans() }}
                    </span>
                    <div class="reply__content">
                        {!! $reply->content !!}
                    </div>
                </div>

            </div>

            @can('destroy', $reply)
                <div class="reply__right">
                    <form action="{{ route('replies.destroy', $reply->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </div>
            @endcan
        </div>
    @endforeach
</div>
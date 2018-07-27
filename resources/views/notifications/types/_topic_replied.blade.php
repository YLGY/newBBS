<div class="notification">
    <div class="notification__left">
        <a href="{{ route('users.show', $notification->data['user_id']) }}">
            <img src="{{ $notification->data['user_avatar'] }}" alt="{{ $notification->data['user_name'] }}" class="notification__avatar">
        </a>

        <div class="notfication__info">
            <a href="{{ route('users.show', $notification->data['user_id']) }}">
                {{ $notification->data['user_name'] }}
            </a>
             comment 
            <a href="{{ $notification->data['topic_link'] }}">
                {{ $notification->data['topic_title'] }}
            </a>

            <div class="notification__content">
                {!! $notification->data['reply_content'] !!}
            </div>
        </div>
    </div>

    <div class="notifcation__right">
        {{ $notification->created_at->diffForHumans() }}
    </div>
</div>
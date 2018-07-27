<div class="reply__box">
    <form action="{{ route('replies.store') }}" method="POST">
        @csrf
        <input type="hidden" name="topic_id" value="{{ $topic->id }}">
        <div class="form-group">
            <textarea name="content" rows="3" class="form-control" placeholder="Share ideas..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Reply</button>
    </form>
</div>
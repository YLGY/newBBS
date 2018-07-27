@extends('layouts.app')
@section('title', $topic->title)
@section('description', $topic->excerpt)

@section('content')

<div class="topic">
    <div class="topic__author">
        <p class="topic__author-name">
            Author: {{ $topic->user->name }}
        </p>
        <div class="topic__author-avatar">
            <a href="{{ route('users.show', $topic->user->id) }}">
                <img src="{{ $topic->user->avatar }}" alt="{{ $topic->user->name }}">
            </a>
        </div>
    </div>

    <div class="topic__right">
        <div class="topic__content">
            <h1 class="topic__header">
                {{ $topic->title }}
            </h1>
            <div class="topic__sub">
                {{ $topic->created_at->diffForHumans() }}
                <span class="media__span"> • </span>
                {{ $topic->reply_count }} Replies
            </div>
    
            <div class="topic__body">
                {!! $topic->body !!}
            </div>
    
            @can('update', $topic)
                <hr>
                <div class="topic__footer">
                    <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-primary btn-x" role="button">
                        Edit
                    </a>
                    <form href="{{ route('topics.destroy', $topic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
    
                        <button type="submit" class="btn btn-primary btn-xs" role="button">
                            Delete
                        </button>
                    </form>
                </div>
            @endcan
        </div>

        <div class="reply__container">
            @include('topics._reply_box', ['topic' => $topic])
            @include('topics._reply_list', ['replies' => $topic->replies()->with('user')->recent()->get()])
        </div>
    </div>
</div>

@endsection

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

        <div class="topic__footer">
            <hr>
            <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-primary btn-x" role="button">
                Edit
            </a>
            <a href="#" class="btn btn-primary btn-xs" role="button">
                Delete
            </a>
        </div>
    </div>
</div>

@endsection

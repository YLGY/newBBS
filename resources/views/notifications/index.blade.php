@extends('layouts.app')
@section('title', 'My notifications')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>My Notifications</h3>
        </div>
        <div class="card-body">
            @if ($notifications->count())
                <div class="notifications">
                    @foreach ($notifications as $notification)
                        @include('notifications.types._' . snake_case(class_basename($notification->type)))
                    @endforeach
                    {!! $notifications->render() !!}
                </div>
            @endif
        </div>
    </div>
@endsection
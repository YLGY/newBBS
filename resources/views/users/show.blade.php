@extends('layouts.app')
@section('title', $user->name . ' information center')

@section('content')
    <div class="container info-container">
        <div class="left">
            <div class="info-container__item">
                <img src="{{ $user->avatar }}" class="left__img">
            </div>
            <div class="left__info info-container__item">
                <h4>Personal Info</h4>
                <p>
                    {{ $user->introduction }}
                </p>
            </div>
            <div class="left__time info-container__item">
                <h4>Register at</h4>
                <span>{{ $user->created_at->diffForHumans() }}</span>
            </div>
        </div>

        <div class="right">
            <div class="right__header info-container__item">
                <h2>
                    {{ $user->name }} <small> {{ $user->email }}</small>
                </h2>
            </div>

            <hr>

            <div class="right__content info-container__item">
                <div class="card">
                    <div class="card-header">
                        <div class="nav nav-pills">
                            <li class="nav-item active">
                                <a href="#" class="nav-link">Topices</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Replies</a>
                            </li>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('users._topics', ['topics' => $user->topics()->recent()->paginate(5)])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
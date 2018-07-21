@extends('layouts.app')
@section('title', $user->name . ' information center')

@section('content')
    <div class="container info-container">
        <div class="left">
            <div class="left__img info-container__item">
                <img src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" 
                            class="header__img" width="30px" height="30px"
                        >
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
                Nothing yet.
            </div>
        </div>
    </div>
@endsection
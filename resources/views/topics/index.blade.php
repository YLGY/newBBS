@extends('layouts.app')
@section('title', 'Topics List')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="card">
            <div class="card-header">
                {{-- <h1>
                    <i class="icon-paragraph-justify align-middle"></i> Topic
                    <a class="btn btn-success float-right align-text-bottom" href="{{ route('topics.create') }}"><i class="icon-plus"></i> Create</a>
                </h1> --}}

                <div class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Last replied</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Newest</a>
                    </li>
                </div>
            </div>

            <div class="card-body">
                @include('topics._topic_list')

                {!! $topics->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>
</div>

@endsection
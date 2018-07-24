@extends('layouts.app')
@section('title', isset($category) ? $category->name : 'Topics List')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-9 col-md-9">
            @if (isset($category))
                <div class="alert alert-info">
                    {{ $category->name }} : {{ $category->description }}
                </div>
            @endif
    
            <div class="card">
                <div class="card-header">
                    {{-- <h1>
                        <i class="icon-paragraph-justify align-middle"></i> Topic
                        <a class="btn btn-success float-right align-text-bottom" href="{{ route('topics.create') }}"><i class="icon-plus"></i> Create</a>
                    </h1> --}}
    
                    <div class="nav nav-pills">
                        <li class="nav-item">
                            <a href="{{ Request::url() }}?order=default" class="nav-link
                                {{ active_class(! if_query('order', 'recent')) }}">Last replied</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Request::url() }}?order=recent" class="nav-link 
                                {{ active_class(if_query('order', 'recent')) }}">Newest</a>
                        </li>
                    </div>
                </div>
    
                <div class="card-body">
                    @include('topics._topic_list')
    
                    {!! $topics->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
    
        <div class="col col-lg-3 col-md-3 sidebar">
            @include('topics._sidebar')
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col col-md-10 mx-auto">
        <div class="card">
            
            <div class="card-header">
                <h1>
                    <i class="icon-quill"></i> Topic /
                    @if($topic->id)
                        Edit #{{$topic->id}}
                    @else
                        Create Topic
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="card-body">
                @if($topic->id)
                    <form action="{{ route('topics.update', $topic->id) }}" method="POST" accept-charset="UTF-8">
                        @method('PUT')
                @else
                    <form action="{{ route('topics.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    @csrf

                            
                        <div class="form-group">
                            <label for="title-field">Title</label>
                            <input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $topic->title ) }}" />
                        </div> 
                        <div class="form-group">
                            <select name="category_id" class="form-control" required>
                                <option value="" hidden disabled selected>Please Select the category</option>
                                @foreach ($categories as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="body-field">Content</label>
                            <textarea name="body" id="body-field" class="form-control" rows="3">{{ old('body', $topic->body ) }}</textarea>
                        </div> 

                        <div class="well well-sm">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection
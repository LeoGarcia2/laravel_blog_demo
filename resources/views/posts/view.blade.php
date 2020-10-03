@extends('layouts.app')

@section('content')
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to posts</a>
    <h1>{{ $post->title }}</h1>
    @if($post->cover_image != 'noimage')
    <img src="/storage/cover_images/{{ $post->cover_image }}" alt="Cover image">
    @endif
    <p>{{ $post->body }}</p>
    <hr>    
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <section class="d-flex">   
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary mr-1">Edit</a>
                
                {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                {!! Form::close() !!}
            </section>
        @endif
    @endif

@endsection
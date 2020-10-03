@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <section class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </section>
        <section class="form-group">
            {{ Form::label('body', 'Content') }}
            {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Content']) }}
        </section>
        <section class="form-group">
            {{ Form::file('cover_image') }}
        </section>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
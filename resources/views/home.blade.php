@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your posts</h3>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">{{ __('Create post') }}</a>
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <section class="card p10">
                                <section class="card-body">
                                    <h2>
                                        <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                                    </h2>
                                    <section class="d-flex">                                        
                                        <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary mr-1">Edit</a>
                                        
                                        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                        {!! Form::close() !!}
                                    </section>
                                </section>                
                            </section>
                        @endforeach
                    @else
                        <p>You have no post.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <h1>POSTS</h1>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <section class="card p10">
                <section class="card-body">
                    <h2>
                        <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                    </h2>
                    <p>
                        Created the {{ date_format($post->created_at, 'Y-m-d') }}
                    </p>
                </section>                
            </section>
        @endforeach
    @endif
@endsection
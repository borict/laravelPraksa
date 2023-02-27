@extends('layout.master')

@section('title', 'Posts')

@section('content')
    <h1>All posts</h1>
    <a href="/api/create">Create new post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('single-post', ['id' => $post->id]) }}">{{ $post->title }}</a>
                <p>{{ $post->content }}</p>
                <br>
            </li>
        @endforeach
    </ul>
@endsection

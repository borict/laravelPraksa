@extends('layout.master')

@section('title', $post->title)

@section('content')
    <div>
        <a href="/posts">Home</a><br><br>
        <h2>{{ $post->title }}</h2><br><br>
        <p>{{ $post->content }}</p><br><br>
        <a href="/posts/{{ $post->id }}/edit">Edit Post</a><br><br>
        <form method="POST">
            @method('DELETE')
            @csrf
            <button>Delete Post</button>
        </form>
    </div>
@endsection

@extends('layout.master')

@section('title', $post->title)

@section('content')
    <div>
        <a href="/posts">Home</a><br><br>
        <h2>{{ $post->title }}</h2><br><br>
        <p>{{ $post->content }}</p><br><br>

        @can('update', $post)
            <a href="/posts/{{ $post->id }}/edit">Edit Post</a><br><br>
        @endcan

        @can('delete', $post)
            <form method="POST">
                @method('DELETE')
                @csrf
                <button>Delete Post</button>
            </form>
        @endcan
    </div>
@endsection

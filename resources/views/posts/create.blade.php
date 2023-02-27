@extends('layout.master')

@section('title', 'Create New Post')

@section('content')
    <a href="/api/posts">Home</a><br><br>
    <h2>Create new post</h2>
    <form action="" method="POST">
        @csrf
        <div>
            <div>
                <label for="title">Post Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            <br><br>
            <div>
                <label for="content">Post Body</label>
                <textarea id="content" name="content" required></textarea>
            </div>
        </div><br><br>
        <div>
            <div>
                <button>
                    Submit
                </button>
            </div>
        </div>
    </form>
@endsection

@extends('layout.master')

@section('title', 'Edit Post')

@section('content')

    <div>
        <a href="/api/posts">Home</a>
        <div>
            <h3>Edit Post</h3>

            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <div>
                        <label for="title">Post Title</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <br>
                    <div>
                        <label for="body">Post Body</label>
                        <textarea id="body"name="body" rows="3" required></textarea>
                    </div>
                </div>

                <br>

                <div>
                    <button>
                        Update Post
                    </button>
                </div>
            </form>
        </div>
    </div>

<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        dd($post);
        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(PostRequest $request): RedirectResponse
    {
        $this->authorize('create', Post::class);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect()->route('all-posts');
    }
    public function edit()
    {
        return view('posts.edit');
    }
    public function update(PostRequest $request, string $postId): RedirectResponse
    {
        $post = Post::find($postId);

        $this->authorize('update', $post);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('all-posts');
    }
    public function destroy(string $postId)
    {
        $post = Post::find($postId);

        $this->authorize('delete', $post);

        $post->delete();
        return redirect()->route('all-posts');
    }
}

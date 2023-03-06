<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Exception;
use Illuminate\Http\RedirectResponse;
use App\Exceptions\PostNotFoundException;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
        try {
            $post = Post::where(['id' => $id])->firstOrFail();
        } catch (Exception $e) {
            throw new PostNotFoundException();
        }

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
    public function update(PostRequest $request, $postId): RedirectResponse
    {
        $post = Post::find($postId);

        $this->authorize('update', $post);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('all-posts');
    }
    public function destroy($postId)
    {
        $post = Post::find($postId);

        $this->authorize('delete', $post);

        $post->delete();
        return redirect()->route('all-posts');
    }
}

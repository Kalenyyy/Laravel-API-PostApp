<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::with('comments')->get());
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->validated());

        return new PostResource($post);
    }

    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);

        return new PostResource($post);
    }

    public function update(StorePostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->validated());

        return new PostResource($post);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->comments()->delete();

        $post->delete();

        return response()->json(['message' => 'Post and related comments deleted successfully'], 200);
    }
}

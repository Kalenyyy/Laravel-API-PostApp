<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function storeComment(StoreCommentRequest $request, $postId)
    {
        $post = Post::findOrFail($postId);

        $comment = $post->comments()->create([
            'post_id' => $post->id,
            'author' => $request->input('author') ?? 'Guest', // fallback jika null
            'message' => $request->input('message'),
        ]);

        return response()->json(['comment' => new CommentResource($comment)], 201);
    }

    public function deleteComment($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully'], 200);
    }
}

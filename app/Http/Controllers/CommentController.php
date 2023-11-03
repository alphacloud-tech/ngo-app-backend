<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Comment;
use App\Reply;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        // Retrieve and return comments from your database
        $comments = Comment::all(); // Adjust this to your model and query logic
        return response()->json($comments);
    }


    public function store(Request $request, BlogPost $blogPost)
    {
        // Validation and other comment creation logic...

        $comment = new Comment();
        $comment->blog_post_id = $request->input('blog_post_id');
        // $comment->user_id = auth()->user()->id; // Assuming you have user authentication
        $comment->content = $request->input('comment');
        $comment->name = $request->input('name');
        $comment->save();

        return response()->json($comment);
    }

    public function getRepliesForComment($commentId)
    {
        $comment = Comment::find($commentId);

        if (!$comment) {
            return response()->json(['error' => 'Comment not found'], 404);
        }

        // Retrieve replies associated with the comment
        $replies = $comment->replies;

        return response()->json($replies);
    }

    public function getCommentsByPost($blog_post_id)
    {
        $comments = Comment::where('blog_post_id', $blog_post_id)->get();
        return response()->json($comments);
    }
}

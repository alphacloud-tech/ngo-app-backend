<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Comment;
use App\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{


    public function index(Comment $comment)
    {
        $replies = $comment->replies; // Assuming you have a 'replies' relationship in your Comment model
        return response()->json($replies);
    }

    public function store(Request $request, BlogPost $blogPost)
    {
        // Validate the request data as needed

        $reply = new Reply();
        $reply->comment_id = $request->comment_id;
        $reply->content = $request->content;
        $reply->name = $request->name;
        // Additional fields if needed

        $reply->save();

        return response()->json($reply);
    }


    public function replies(Comment $comment)
    {
        $replies = $comment->replies;
        return response()->json($replies);
    }
}

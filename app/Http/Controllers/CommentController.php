<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;

class CommentController extends Controller
{
    public function addComment(CommentRequest $request, $id) {
    
        $user = $request->user();
        Comment::create([
            "comment" => $request->comment,
            "user_id" => $user->id,
            "gallery_id" => $id
        ]);
    }
}

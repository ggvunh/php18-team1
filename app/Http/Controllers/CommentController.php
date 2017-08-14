<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Comment;
use App\User;
use Auth;
use Illuminate\Routing\Redirector;

class CommentController extends Controller
{
    public function comment(Request $request, $id)
    {
        $comments = $request->comment;
        $comment = Comment::create(['book_id' => $id, 'user_id' => Auth::user()->id, 'content' => $request->comment]);
        return back()->withInput();
    }
}

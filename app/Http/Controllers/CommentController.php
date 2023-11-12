<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function index()
    {
        return $this->comment->getAll();
    }

    public function show($postId, $commentId)
    {
        return $this->comment->getBy($postId, $commentId);
    }


    public function comments()
    {
        return $this->comment->test();
    }
}

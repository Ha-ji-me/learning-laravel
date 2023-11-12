<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function getAll()
    {
        $comments = $this->with('post')->get();
        return response()->json($comments);
    }

    public function getBy($postId, $commentId)
    {
        $comment = $this->with('post:id,title,content,user_id', 'post.user:id,name')->where([['post_id', $postId],['id', $commentId]])->get();
        return response()->json($comment);
    }


    public function test()
    {
        $comments = $this->select('id','content','user_id','post_id')
            ->with(
                'post:id,title,content,user_id',
                'post.user:id,name')
            ->get();
        return response()->json($comments);
    }
}

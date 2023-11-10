<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAll()
    {
        $posts = $this->with('user')->get();
        $test = $this->select('id', 'title', 'content', 'user_id')
            ->with('user:id,name')
            ->get();
        return response()->json($test);
    }

    public function getBy($postId)
    {
        $post = $this->select('id', 'title', 'content', 'user_id')
            ->with('user:id,name')
            ->find($postId);
        return response()->json($post);
    }
}

<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Repositories\PostInterface;
use App\Models\Comment;
use App\Repositories\PostRepository;

class CommentRepository implements PostInterface
{
    public function all()
    {
        $comment=Comment::all();
    }

    public function add(Request $request)
    {
        $comment=Comment::create(['comments'=>request('comment'),
                                    'post_id'=>$request->id]);

        return $comment;
    }

    public function find(Request $request)
    {
        return Comment::find($request->id);

    }

    public function update(Request $request)
    {
      # code...
    }

    public function remove(Request $request)
    {
      # code...
    }
}

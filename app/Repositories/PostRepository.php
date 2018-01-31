<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Repositories\PostInterface;
use App\Libraries\FileStorage;
use App\Models\Post;
use App\Models\Comment;

class PostRepository implements PostInterface
{
    public function all()
    {
        return Post::selectRaw('id, title, description, image, created_at, year(created_at)year, monthname(created_at)month, count(*)')
                    ->groupBy('id', 'title', 'description', 'image', 'created_at', 'year','month')
                    ->orderBy('id','desc')->with('Comment')
                    ->get();

      //  return Post::orderBy('id', 'desc')->get();
    }

    public function add(Request $request)
    {
        $posts=Post::create(request()->all());
        FileStorage::uploadImage($posts, $request);
        return $posts->id;
    }

    public function remove(Request $request)
    {
        return $post=Post::destroy(request('id'));
    }

    public function find(Request $request)
    {
        $posts=Post::find($request->id);
        return $posts;
    }

    public function update(Request $request)
    {
        $posts=Post::create(request()->all());
        FileStorage::uploadImage($posts, $request);
        return $posts->id;
    }
}

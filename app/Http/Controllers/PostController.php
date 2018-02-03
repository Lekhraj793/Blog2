<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Repositories\CommentRepository;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{

    public function index()
    {
        $post=New PostRepository();
        $posts=$post->all();
        return view('index', compact('posts'));
    }

    public function insert()
    {
        return view('posts.insert');
    }

    public function Store(Request $request)
    {
        $post=New PostRepository();
        $posts=$post->add($request);
        if ($posts)
        {
            redirect ('/index');
        }
        else {
            throw new \Exception("Error Processing Request");
        }
    }

    public function show(Request $request)
    {
        $show=New PostRepository();
        $post=$show->find($request);

        $comment=New CommentRepository();
        $comment=$comment->find($request->id);

        return view('/posts/show', compact('post', 'comment'));
    }

    public function edit(Request $request)
    {
        $edit=New PostRepository();
        $post=$edit->find($request);
        return view('/posts/edit', compact('post'));
    }

    public function destroy(Request $request)
    {
        $delete=New PostRepository();
        $post=$delete->remove($request);
        redirect('/');
    }
}

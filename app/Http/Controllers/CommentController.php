<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentRepository;

class CommentController extends Controller
{

    public function __construct()
    {
      # code...
    }

    public function Store(Request $request)
    {

        $comment=New CommentRepository();

        $comment=$comment->add($request);
        dd($comment);
        if ($comment)
        {
            return back();
        }
        else {
            throw new \Exception("Error Processing Request");
        }
    }

    public function cmmntshow(Request $request)
    {
        
    }
}

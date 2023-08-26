<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function create()
    {
        return view('post.createPost');
    }

    public function store(Request $request)
    {

        // dd($request);

        $request->validate([
            'comment' => ['required', 'string', 'max:255'],
        ]);

        $comment = Comments::create([
            'comment' => $request->comment,
            'post_id' => $request->post_id,
            'user_id' =>Auth::id()
        ]);

        if ($comment === false) {

            return Redirect::route('post.allPost')->with([
                'status' => 'failed',
                'message' => 'Failed To Add Comment'
            ]);;

        }

        return redirect()->route('post.show', ['postID' => $request->post_id]);

        // return Redirect::route('post.allPost')->with([
        //     'status' => 'success',
        //     'message' => 'Comment added Successful'
        // ]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
// use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function allPost()
    {

        $posts = Post::orderBy('created_at', 'DESC')->paginate(2);

        
        return view('post.allPost', ['posts' => $posts]);
    }

    public function show(Request $request, $postID)
    {

        $post = Post::find($postID);
        $comments = Comments::where('post_id', $postID)->orderBy('created_at', 'DESC')->get();
        // dd( $comments);

        return view('post.detailPost', ['post'=>$post, 'comments'=>$comments]);

    }

    public function create()
    {
        return view('post.createPost');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' =>Auth::id()
        ]);

        if ($post === false) {

            return Redirect::route('post.allPost')->with([
                'status' => 'failed',
                'message' => 'Failed To Add Post'
            ]);;

        }

        return Redirect::route('post.allPost')->with([
            'status' => 'success',
            'message' => 'Post added Successful'
        ]);

    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
        ]);

        $post = Post::findOrFail($request->postID);

        if ($post->updateOrFail($request->all()) === false) {

            return Redirect::route('post.allPost')->with([
                'status' => 'failed',
                'message' => 'Post Update Failed'
            ]);

        }

        return Redirect::route('post.allPost')->with([
            'status' => 'success',
            'message' => 'Post Update Successful'
        ]);



    }

    public function delete(Request $request)
    {
        $deletePost = Post::destroy($request->postID);

        if ($deletePost === false) {

            return Redirect::route('post.allPost')->with([
                'status' => 'failed',
                'message' => 'Post Update Failed'
            ]);;

        }

        return Redirect::route('post.allPost')->with([
            'status' => 'success',
            'message' => 'Post Delete Successful'
        ]);

    }

}

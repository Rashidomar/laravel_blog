<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function allPost()
    {

        $posts = Post::all();
        
        return view('post.allPost', ['posts' => $posts]);
    }

    public function show(Request $request, $postID)
    {

        $post = Post::find($postID);

        return view('post.detailPost', ['post'=>$post]);

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

        // if ($post->updateOrFail($request->all()) === false) {

        //     return Redirect::route('post.allPost')->with('status', 'Post update failed');

        // }

        // return Redirect::route('post.allPost')->with('status', 'Post-updated!');

        return redirect(RouteServiceProvider::HOME);
    }

    public function update(Request $request)
    {
        // dd($request);
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
            'message' => 'Post Updated Successful'
        ]);



    }

    public function deletePost(Request $request)
    {

        $deletePost = Post::destroy($request->id);

        if ($deletePost === false) {

            return Redirect::route('post.allPost')->with('status', 'Post delete failed');

        }

        return Redirect::route('post.allPost')->with('status', 'Post-Delete!');

    }

}

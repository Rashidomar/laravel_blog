<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function allPost()
    // {
 
    //     return view('post.post');
    // }

    public function detailPost(Request $request, $id)
    {
        dd($id);

    }

    public function createPost(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string',],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function UpdatePost()
    {

    }

    public function deletePost()
    {

    }

}

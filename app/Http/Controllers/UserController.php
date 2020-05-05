<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login_page(){

        return view('users/userLogin');

    }

    public function signup_page(){

        return view('users/userSignup');
    }

    public function user_dashboard(){

        return view('users/userdashboard');
    }

    public function user_register(Request $request){

            $this->validate($request,[
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]);

            $user = new User();

            $user->username = $request->input('username');

            $user->email = $request->input('email');

            $user->password =  Hash::make($request->input('password'));

            // $user->password = $request->input('password');

            $user->save();

            Auth::login($user);

            return redirect("/user/dashboard")->with('success', 'Great! You have Successfully loggedin');

    }

    public function user_login(Request $request){

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',

        ]);

        // $username = $request->input('username');

        // $password = $request->input('password');

        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password])
        ){
            return redirect('user/dashboard');
        }
        return redirect('/user')->with('error', 'username or Password');

    }

    public function logout() {

        Auth::logout();

        return redirect('/posts');
    }
}

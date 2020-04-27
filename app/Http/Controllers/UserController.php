<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request)
        {
            $username = $request['username'];
            $email = $request['email'];
            $password = $request['password'];

            $user = new User();

            $user->username = $username;
            $user->email = $email;
            $user->password = $password;

            $user->save();

            return redirect()->back();

        }

    public function postLogIn(Request $request)
    {

    }
}

?>

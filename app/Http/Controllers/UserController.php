<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if($user|| Hash::check($req->password,$user->password))
        {
            $req->session()->put('user',$user);
            return "Username or Password is Correct";
        }else{
            // return redirect('/');
            return "Username or Password is not Correct";

        }
    }
}

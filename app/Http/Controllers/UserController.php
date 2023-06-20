<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use illuminate\Support\Facades\Auth;
    use app\Models\User;

class UserController extends Controller
{
    function auth(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){

            return redirect()->intended('template');
        }
        return redirect()->back();
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}

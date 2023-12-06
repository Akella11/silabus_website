<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class login_controller extends Controller
{
    public function login(Request $request){
        if(Auth::check()){
            return redirect()->intended(route('user.private'));
        }

        $formFields = $request->only(['email', 'password', 'name']);

        if(Auth::attempt($formFields)){
            return redirect()->intended(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'email' => 'Не вийшло авторизуватись'
        ]);
    }
}

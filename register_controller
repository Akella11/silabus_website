<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class register_controller extends Controller
{
    public function save(Request $request){

        if(Auth::check()){
            return redirect(route('user.private'));
        }

        $validateFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'

        ]);

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Помилка при збереженні користувача'
        ]);
    }
}

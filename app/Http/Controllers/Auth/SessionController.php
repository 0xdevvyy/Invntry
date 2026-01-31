<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SessionRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function store(SessionRequest $request){
        $user = $request->validated();
        if(Auth::attempt($user)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
        return back()->withErrors([
            'email' => 'Credentials doesnt match'
        ]);
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}

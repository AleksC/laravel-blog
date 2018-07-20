<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }                               

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {

        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = request()->only(['email', 'password']);
        
        if(!auth()->attempt($credentials))
        {
         return redirect()->back()->withErrors([
             'message' => 'Wrong username or password.'
         ]);   
        };

        return redirect('/');
    }
}

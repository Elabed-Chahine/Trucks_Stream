<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logController extends Controller
{
    //
    public function create()
    {
        return view('form.login');
    }
    public function show()
    {
        $user = request()->validate([
            "email" => "email|required",
            "password" => "required"
        ]);

        if (auth()->attempt($user)) {
            request()->session()->regenerate();
            return redirect("/")->with('success', "log in succeeded");
        }
        if (Auth::guard('driver')->attempt($user)) {
            request()->session()->regenerate();
            return redirect("/")->with('success', "log in succeeded");
        }



        return back()
            ->withInput()
            ->withErrors((['email' => 'Your provided credentials could not be verified.']));
    }
    public function logout()
    {
        if(auth()->check() )
       { auth()->logout();}
        else
        {auth()->guard('driver')->logout();}

        return redirect("/")->with('success', "logout succeeded");
    }
}

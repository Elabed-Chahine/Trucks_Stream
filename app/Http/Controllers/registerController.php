<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    //

    public  function store()
    {

        $attributes = request()->validate([
            'email' => 'email|required|unique:users,email|unique:drivers,email',
            'password' => 'min:4|required',
            'name' => 'required|max:100',
            'radio' => 'required',
            'thumbnail' => 'required|image',
            'bio' => 'max:600'

        ]);

        if (isset($attributes['thumbnail']))
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        if (request()->input('radio') == 'driver') {
            $user = Driver::create($attributes);

            auth()->guard('driver')->login($user);
        } else {
            $user = User::create($attributes);
            auth()->login($user);
        }




        return redirect('/')->with('success', "registered");
    }









    public function create()
    {
        return view('form.register');
    }
}

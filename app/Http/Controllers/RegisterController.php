<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('index');
    }


    public function store(Request $request)
    {

        $this->validate(request(),[

            'name' => 'required',
            'email'=> 'required|email',
            'password' => 'required|confirmed'
            ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        auth()->login($user);

        return redirect('/home');
    }

    public function logout()
    {
        auth()->logout();
       return redirect ('login');
    }



}

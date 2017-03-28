<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth',['except'=>'index','store']);
//    }




    public function index()
    {
        return view ('login');
    }



    public function store()
    {


      $userdata = array('email' => Input::get('email'),
                            'password' => Input::get('password'));




      if(Auth::attempt($userdata))
      {

          return redirect('/home');
      }
      else
          {

          return back()->withErrors([

              'message' => 'Please check your credentials and try again.'


          ]);
        }

    }



}

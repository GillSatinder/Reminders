<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{


//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function index()
    {

//        return \App\User::find(2)->comments;



//        $comments = Comment::latest()->get();
//        return $comments;
    }


    public function store(Request $request)
    {


        $commentData = new Comment();
        $commentData->body = $request->body;
        $commentData->user_id = Auth::user()->id;
        $commentData->save();

    }


    public function destroy($id)
    {
        $comment = Comment::find($id);
         $comment -> delete();

    }


    public function getComments()
    {
        return \App\User::find(\Auth::user()->id)->comments;
    }



}

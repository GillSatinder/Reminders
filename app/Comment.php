<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = ['name','id','user_id'];



    public function getAllComments()
    {

    }
}

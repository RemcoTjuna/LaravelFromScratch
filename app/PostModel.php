<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class PostModel extends Eloquent
{
    //Fields that are mass assignable
    protected $fillable = ['title', 'body', 'blog_id', 'user_id'];

    //Fields that are not allowed to get filled by a input (form, etc)
    protected $guarded = [];

}
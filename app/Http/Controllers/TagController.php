<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Blog;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //


    public function index(Blog $blog, Tag $tag){
        $posts = $tag->posts;
        return view('posts.index', compact('posts'));
    }
}

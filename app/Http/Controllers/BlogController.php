<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\ExampleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Post;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ExampleRequest $request)
    {

        $blogs = Blog::latest()
            ->filter([$request['month'], $request['year']])
            ->get();

        return view('blog.index', compact('blogs', 'archives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'blog_content' => 'required',
            'blog_title' => 'required|max:60'
        ]);

        $blog = new Blog();
        $blog = $blog->create([
            'content' => $request['blog_content'],
            'title' => $request['blog_title'],
            'user_id' => auth()->id()
        ]);

        if($request['post_title'] && $request['post_content']) {
            $blog->addPost($request['post_title'], $request['post_content'], auth()->id());
        }

        return redirect('/blog/' . $blog->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

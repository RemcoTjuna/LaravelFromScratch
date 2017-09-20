@extends('layout_post')

@section('content')
    <div class="container">
        <div class="col-sm-8 blog-main">


            <form method="POST" action="/blogs">

                <!-- Secret SCRF token to defense against a certain attack -->
                {{ csrf_field() }}

                <h1>Blog Content</h1>
                <hr/>
                <div class="form-group">
                    <label for="blog_title">Blog Title:</label>
                    <input type="text" class="form-control" id="blog_title" name="blog_title">
                </div>
                <div class="form-group">
                    <label for="blog_content">Description/Content:</label>
                    <input type="text" class="form-control" id="blog_content" name="blog_content">
                </div>

                <h1>Add start Post</h1>
                <hr/>
                <div class="form-group">
                    <label for="post_title">Post Title:</label>
                    <input type="text" class="form-control" id="post_title" name="post_title">
                </div>
                <div class="form-group">
                    <label for="post_content">Content:</label>
                    <input type="text" class="form-control" id="post_content" name="post_content">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
    @include('partials.errors')

@endsection
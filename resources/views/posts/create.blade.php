@extends('layout_post')

@section('content')
    <div class="container">
        <div class="col-sm-8 blog-main">


            <form method="POST" action="/blog/{{$blog->id}}/posts">

                <!-- Secret SCRF token to defense against a certain attack -->
                {{ csrf_field() }}

                <h1>Add Post</h1>
                <hr/>
                <div class="form-group">
                    <label for="title">Post Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>
                <input type="hidden" name="blog_id" value="{{$blog->id}}">

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
    @include('partials.errors')

@endsection
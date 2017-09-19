@extends('layout_post')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">
                @foreach($blogs as $blog)
                    <div class="blog-post">
                        <h2 class="blog-post-title"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h2>
                        <p class="blog-post-meta">{{$blog->created_at->toFormattedDateString()}}@if(count($blog->posts)) || {{count($blog->posts)}} Posts @endif</p>

                        <p>{{$blog->content}}</p>
                    </div><!-- /.blog-post -->
                @endforeach

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="/blogs/create">Create a new blog</a>
                </nav>

            </div><!-- /.blog-main -->
        </div>
    </div>
@endsection
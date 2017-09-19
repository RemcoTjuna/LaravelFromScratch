@extends('layout_post')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title">{{$post->title}}</h2>
                    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}@if(count($post->comments)) >> {{count($post->comments)}} Comments @endif</p>

                    <p>{{$post->content}}</p>

                </div><!-- /.blog-post -->

                @include('posts.post')

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="/blog/{{$post->blog_id}}">Back to blog</a>
                </nav>

            </div><!-- /.blog-main -->
        </div>
    </div>
@endsection
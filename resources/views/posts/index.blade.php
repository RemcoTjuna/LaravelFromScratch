@extends('layout_post')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{$post->title}}</h2>
                        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>

                        <p>{{$post->body}}</p>
                        <hr/>

                    </div><!-- /.blog-post -->
                @endforeach
            </div><!-- /.blog-main -->
        </div>
    </div>
@endsection
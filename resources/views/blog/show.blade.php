@extends('layout_post')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                @foreach($blog->posts as $post)
                    <div class="blog-post">

                        <h2 class="blog-post-title"><a href="/blog/{{$blog->id}}/posts/{{$post->id}}">{{$post->title}}</a></h2>
                        <p class="blog-post-meta">@if(count($post->tags))
                                @foreach($post->tags as $tag) {{$tag->name}} @endforeach <br/> @endif
                            {{$post->created_at->toFormattedDateString()}}
                            @if(count($post->comments)) >> {{count($post->comments)}} Comments @endif</p>

                        <p>{{$post->content}}</p>
                        <hr/>

                    </div><!-- /.blog-post -->

                @endforeach

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="/blog/{{$blog->id}}/newpost">Add a new post</a>
                </nav>

            </div><!-- /.blog-main -->
        </div>
    </div>
@endsection
@extends('layout_post')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                @if(count($posts))
                    @foreach($posts as $post)
                        <div class="blog-post">
                            <h2 class="blog-post-title">{{$post->title}}</h2>
                            <p class="blog-post-meta">@if(count($post->tags))
                                    @foreach($post->tags as $tag) {{$tag->name}} @endforeach <br/> @endif
                                {{$post->created_at->toFormattedDateString()}}
                                @if(count($post->comments)) >> {{count($post->comments)}} Comments @endif</p>

                            <p>{{$post->content}}</p>

                            <hr/>

                        </div><!-- /.blog-post -->
                    @endforeach
                @else
                    <div class="blog-post">
                        <h2 class="blog-post-title">Er zijn geen posts gevonden.</h2>
                    </div>
                @endif
            </div><!-- /.blog-main -->
        </div>
    </div>
@endsection
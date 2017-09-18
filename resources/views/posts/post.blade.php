<div class="blog-post">

    <a href="/blogs/posts/{{$post->id}}">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
    </a>
    <!-- -->
    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>

    {{$post->body}}

    <hr/>
    <div class="comments">
        <ul class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">

                <strong>
                    {{ $comment->created_at->diffForHumans() }}:
                </strong>

                {{$comment->content}}
            </li>
        @endforeach
        </ul>
    </div>
</div><!-- /.blog-post -->
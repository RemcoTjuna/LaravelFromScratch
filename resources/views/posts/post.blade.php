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
    <hr/>
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/blogs/posts/{{$post->id}}/comments">
                <!-- To have a patch method, do the following param: { { method_field('PATCH') } }, etc. -->

                <!-- Secret SCRF token to defense against a certain attack -->
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="content" id="content" placeholder="Your comment here." class="form-control"></textarea>
                    <button type="submit" class="btn btn-default">Add comment</button>
                </div>
            </form>
            @include('partials.errors')
        </div>
    </div>
</div><!-- /.blog-post -->
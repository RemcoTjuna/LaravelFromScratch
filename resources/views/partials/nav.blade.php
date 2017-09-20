<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="/blogs">Home</a>

            @if(auth()->check())
                <div class="nav-link ml-auto">{{ auth()->user()->name }}</div>
            @endif

        </nav>
    </div>
</div>

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">My blog</h1>
        <p class="lead blog-description">My blog, made by me.</p>
    </div>
</div>
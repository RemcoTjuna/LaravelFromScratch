@extends('layout_post')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create a post</h1>
        <hr/>
        <form method="POST" action="/blogs">
            <!-- Secret SCRF token to defense against a certain attack -->
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Body:</label>
                <input type="text" class="form-control" id="body" name="body">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

    @include('partials.errors')

@endsection
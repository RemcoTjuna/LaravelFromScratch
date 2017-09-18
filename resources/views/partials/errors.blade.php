<!-- If there are any errors -->
@if(count($errors))

    <div class="alert alert-danger" style="margin-top: 15px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
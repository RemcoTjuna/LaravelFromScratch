<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
</html>
<body>
<!-- Blade System, templating on the level of Blade PHP -->
@foreach($tasks as $task)
    <li>
        <a href="/tasks/{{ $task->id }}">
            {{ $task->body }}
        </a>
    </li>
@endforeach
</body>
</html>
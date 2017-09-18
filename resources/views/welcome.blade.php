<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
</html>
<body>
    <!-- PHP System, not using Blade at this moment
    <ul>
        <?php foreach($tasks as $task) : ?>
            <li><?= $task ?></li>
        <?php endforeach; ?>
    </ul>
    -->

    <!-- Blade System, templating on the level of Blade PHP -->
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</body>
</html>
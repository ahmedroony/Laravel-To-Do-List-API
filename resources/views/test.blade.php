<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hello from
    @foreach ($jobs as $job )
    <a href="/jobs/1">here</a>
    <br>
    <li>{{ $job['title'] }}</li>
    <br>
    @endforeach
</body>
</html>

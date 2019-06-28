<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Myboard</h1>

<ul>
    @forelse ($projects as $project)
        <li>{{ $project->title }}</li>
    @empty
        <li>There is no projects.</li>
    @endforelse
</ul>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <article>
        <h1>{{ $post->title }}</h1>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go back</a>

</body>
</html>

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
    <h4>Test Pusher</h4>
    <div>
        {!! Form::open(['route' => 'post.data']) !!}
            {!! Form::text('name',old('name')) !!}
            {!! Form::text('age',old('age')) !!}
            {!! Form::submit('Send') !!}
        {!! Form::close() !!}
    </div>
</body>
</html>
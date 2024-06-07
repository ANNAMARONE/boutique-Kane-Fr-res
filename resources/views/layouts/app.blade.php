<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (session('flash_notification'))
    @foreach (session('flash_notification', collect())->toArray() as $message)
        <div class="alert alert-{{ $message['level'] }}">
            {!! $message['message'] !!}
        </div>
    @endforeach
@endif
</body>
</html>
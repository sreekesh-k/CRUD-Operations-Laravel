<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <center>
        <h1>Read Items:</h1>
        <hr>
        <div>
            @if (session()->has('success'))
                <div>
                    {{ session('success') }}
                </div>
            @endif
        </div>
        @foreach ($items as $item)
            <div>
                {{ $item->id }}. {{ $item->name }}
                <a href="{{ route('updating', ['item' => $item]) }}">edit</a>
                <a href="{{ route('deleting', ['item' => $item]) }}">Delete</a>
            </div>
        @endforeach
        <a href="{{ route('creating') }}">Create items?</a>
    </center>


</body>

</html>

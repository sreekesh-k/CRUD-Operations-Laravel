<!DOCTYPE html>
<html lang="en">
<?php
$count = 0;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Read Items</span>
        </div>
    </nav>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SI</th>
                <th scope="col">ID</th>
                <th scope="col">Item</th>
                <th scope="col">Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ ++$count }}</th>
                    <td> {{ $item->id }}</td>
                    <td> {{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td> <a href="{{ route('updating', ['item' => $item]) }}">Edit</a></td>
                    <td><a href="{{ route('deleting', ['item' => $item]) }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('creating') }}">Create items?</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

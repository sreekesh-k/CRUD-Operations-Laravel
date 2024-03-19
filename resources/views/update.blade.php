<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <center>
        <h1>UPDATE YOUR ITEM</h1>
        <hr>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form action="{{ route('update.confirm',['item'=>$item]) }}" method="POST">
            @csrf
            <div>
                <input type="text" name="name" placeholder="ItemName" value="{{ $item->name }}">
            </div>
            <div>
                <input type="text" name="description" placeholder="Description" value="{{ $item->description }}">
            </div>
            <div>
                <input type="submit" name="submit" value="Confirm">
            </div>
        </form>
    </center>
</body>

</html>

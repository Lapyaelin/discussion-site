<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Speaker page</title>
</head>
<body>
<h1>Speaker home page</h1>
<h2>"role"=>"speaker"</h2>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <input type="submit" value="logout">
</form>
</body>
</html>


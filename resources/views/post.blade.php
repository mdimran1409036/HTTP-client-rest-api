<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>http-Client</title>
</head>
<body>
    <div class="form-controller ">
        <form action="{{route('getPost')}}" method="post">
            @csrf
            <label for="postid"> Post ID</label>
            <input type="text" name="id" >
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h2>建立文章</h2>
<form action="{{ route('post.create') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="title">標題</label>
    <input type="text" name="title"><br>
    <label for="title">副標題</label>
    <input type="text" name="sub_title"><br>
    <label for="content"></label>
    <textarea name="content" id="" cols="30" rows="10"></textarea><br>
    <button type="submit">送出</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  @foreach($list as $list)
    <a href='list/{{$list->id}}/show'>{{$list->job_title}}</a>
    <p>{{$list->company}}</p>
    <p>{{$list->tags}}</p>
  @endforeach
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  @foreach($list as $list)
    <h1>{{$list->job_title}}</h1>
    <p>{{$list->company}}</p>
  @endforeach
    
</body>
</html>
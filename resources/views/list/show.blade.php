<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <h1>{{$list->job_title}}</h1>
    <p>{{$list->company}}</p>
    <x-list-tags :tagsCsv="$list->tags"/>
    <p>{{$list->sallary}}</p>
    <p>{{$list->location}}</p>
    <p>{{$list->email}}</p>
    <p>{{$list->website}}</p>
    <p>{{$list->description}}</p>
 
</body>
</html>
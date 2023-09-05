@props(['tagsCsv'])

@php
  $tags = explode(',', $tagsCsv);
@endphp

@foreach($tags as $tag)
  <li class="">
    <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li>
@endforeach

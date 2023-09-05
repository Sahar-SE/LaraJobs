@props(['tagsCsv'])

@php
  $tags = exploade(',', $tagsCsv);
@endphp

@foreach($tags as $tag)
  <li class="">
    <a href="/?tag={{$tag}}">{{@tag}}</a>
  </li>
@endforeach

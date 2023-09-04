@extends('layouts/master')

@section('contents')
@include('partials._hero')
@include('partials._search')
  @foreach($list as $list)
    <a href='list/{{$list->id}}/show'>{{$list->job_title}}</a>
    <p>{{$list->company}}</p>
    <p>{{$list->tags}}</p>
  @endforeach
@endsection
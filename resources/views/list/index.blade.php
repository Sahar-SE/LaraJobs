@extends('layouts/master')

@section('contents')
@include('partials._hero')
@include('partials._search')
  @foreach($list as $list)
    
  @endforeach
@endsection
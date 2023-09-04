@extends('layouts/master')

@section('contents')
@include('partials._hero')
@include('partials._search')
  @foreach($list as $list)
    <x-list-card :list="$list"/>
  @endforeach
@endsection
@extends('layouts/master')

@section('contents')

  <form action="/list/store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text">
    <button type="submit">sub</button>
  </form>
    
@endsection
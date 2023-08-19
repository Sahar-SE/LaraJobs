@extends('master')
<body>
  <form action="/list/store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text">
    <button type="submit">sub</button>
  </form>
    
</body>
</html>
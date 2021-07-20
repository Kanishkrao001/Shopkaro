<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>@yield("title")</title>
    <link rel="stylesheet" href="<?php echo asset('css/temp.css')?>" type = "text/css">
   
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}"/> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
  </head>
<body>
    @section("header")
    @show
    @section("section")
     @show
    @section("aside");
    @show
    @section("footer")
    @show
</body>
</html>
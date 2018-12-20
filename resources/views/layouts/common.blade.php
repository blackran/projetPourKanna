<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>elec : {{ $title or "titre" }} </title>
    <link rel="stylesheet" href={{ asset('/css/styles.css') }}>
  </head>
  <body>
    @include("layouts/partials/_nav")
    @yield("body")
    @include("layouts/partials/_footer")
    <script src={{ asset('/js/jquery.js') }}></script>
    <script src={{ asset('/js/javascript.js') }}></script>
  </body>
</html>

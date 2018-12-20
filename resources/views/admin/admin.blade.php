<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>acc</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/adminCss.css') }}">
  </head>
  <body>
    <div class="header">
      <h1>GESTION DE VENTES PIECES ELECTRONIQUES</h1>
      <div>
        WELCOME, blackran
        <a href="{{ route("home") }}">LOG OUT</a>
      </div>
    </div>
    <h2><a href="/Admin">home</a></h2>
    <!-- > <a href="/Admin/edit">edit</a> -->
    <div style="padding: 30px">
      @yield("body")
    </div>
    <script src="{{ asset("/js/jquery.js")}}"></script>
    <script src="{{ asset("/js/adminJavascript.js")}}"></script>
  </body>
</html>

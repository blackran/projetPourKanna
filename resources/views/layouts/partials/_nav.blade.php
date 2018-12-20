
<nav>
  <h1 id="logo">LOGO</h1>
  <style media="screen">
    #logo{
      text-shadow: 0 0 5px white;
      color: black;
      font-family: Lato;
    }
    ul{
      list-style: none;
      position: relative;
      top: 5px;
      right: 10%;
      font-family: Waree;
    }
    li{
      display: inline-block;
      margin-left: 10px;
    }
    li a{
      color: #202020;
      text-decoration: none;
    }
    li a:hover{
      color: #202020;
      text-shadow: 0 0 2px white;
    }
    #login{
      background: #202020;
      border-radius: 3px;
      box-shadow: 0 0 1px #202020;
      font-weight: bold;
    }
    #login a{
      color: rgb(242,241,240);
      padding: 0 10px 0 10px;
    }
    #login:hover{
      text-shadow: 0 0 2px;
    }
  </style>
  <ul>
    @foreach($menus as $key=>$values)
    <li><a href="{{$values}}">{{ $key }}</a></li>
    @endforeach
    <li><a href="#">sing in</a></li>
    <li id="login"><a href="{{ route('login') }}">login</a></li>
  </ul>
</nav>

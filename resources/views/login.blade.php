<style media="screen">
*{
  background: #e2e2e2;
}
  a{
    text-decoration: none;
    background: #ffffff;
  }
  #logoLogin{
    width: 100px;
    height: 100px;
    border-radius: 100px;
    box-shadow: 0 0 2px #1cbec7;
    margin: 20px;
    margin-left: 25%;
  }
  form{
    background: #ffffff;
  }
  form input{
    display: block;
    border: none;
    font-size: 17px;
    box-shadow: 0 0 2px;
    height: 30px;
    width: 90%;
    margin: 5% 10% 5% 5%;
    padding-left: 10px;
    border-radius: 3px;
    background: #ffffff;
  }
  .body{
    box-shadow: 0 0 1px;
    border-radius: 2px;
    width: 250px;
    background: #ffffff;
    padding: 10px;
    margin: auto;
    margin-top: 20px;
  }
  #btn{
    width: 50%;
    color: #f2f2f2;
    background: #1cbec7;
    margin:auto;
  }
  .error{
    color: red;
    background: white;
    margin-left: 20px;
    font-style: italic;
    position: relative;
    top: -7px;
  }
</style>
<div class="body">
  <img src="{{ asset("image/login-icon.png") }}" id="logoLogin">
  <form class="" action="{{ route('plogin') }}" method="post" id="form">
    {{ csrf_field() }}
    <input type="text" name="name" value="" placeholder="name" id="first">
    <p id="errorF" class="error"></p>
    <input type="password" name="password" value="" placeholder="password" id="pass">
    <p id="errorP" class="error"></p>
    <input type="submit" id="btn" value="login">
  </form>
  <a href="{{ route("home") }}">🏠 home</a>
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/login.js')}}"></script>
</div>

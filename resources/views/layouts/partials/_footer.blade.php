<footer>
  <style media="screen">
    #lign{
      height: 1px;
      width:100px;
      background: rgba(20,20,20,0.5);
      margin: auto;
      margin-top: 30px;
      margin-bottom: 10px;
    }
    #copy{
      width:220px;
      margin: auto;
    }
    footer{
      background-color: rgba(20,20,20,0.5);
      box-shadow: 0 0 5px;
      padding: 20px;
    }
    #foterContent{
      display: block;
      display: flex;
      justify-content: space-around;
      width: 100%;
    }
    .a{
      width: 300px;
    }
    .icon{
      margin-right: 5px;
      position: relative;
      top: 5px;
    }
  </style>
  <div id="foterContent">
    <div class="a">
      <h1>titre</h1>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="a">
      <h1>titre</h1>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="a">
      <h1>titre</h1>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="a">
      <h1>Contact</h1>
      <div><img src="{{ asset('/image/google.png')}}" width="20" height="20" class="icon">google</div>
      <div><img src="{{ asset('/image/facebook.png')}}" width="20" height="20" class="icon">facebook</div>
      <div><img src="{{ asset('/image/twiter.png')}}" width="20" height="20" class="icon">twitter</div>
    </div>
  </div>
  <div id="copy">
    <div id="lign"></div>
    ©️ Copyrigth {{ $date }} | all reserved
  </div>
</footer>

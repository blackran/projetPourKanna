@extends("admin/edit")
@section("containts")
<style media="screen">
  .in{
    margin-left: 10px;
  }
  form .input{
    display: block;
    border: none;
    font-size: 17px;
    box-shadow: 0 0 2px;
    height: 30px;
    width: 20%;
    padding-left: 10px;
    border-radius: 3px;
    background: #ffffff;
    margin-bottom: 10px;
  }
  .btn{
    margin: 10px;
    border: none;
    color: #f2f2f2;
    display: inline-block;
    font-size: 17px;
    padding: 10px;
    border-radius: 3px;
    font-weight: bold;
  }
  .red{
    box-shadow: 0 0 2px red;
    background: #C62828;
  }
  .blue{
    box-shadow: 0 0 2px blue;
    background: #3949AB;
  }
  .error{
    color: red;
    padding: 7px 0 0 10px;
  }
</style>
  <div class="in">
    <form action="{{ route('pajouter',$part) }}" method="post">
      {{ csrf_field() }}
      @foreach($ins as $key=>$values)
        <label>{{ $key }}</label>
        <input type="text" name="{{ $values }}" class="input">
        <!-- <div style="display: flex">
          <input type="text" name="{{ $values }}" class="input">
          {!! $errors->first("$values",' <p class="error">(/!\:message)</p>') !!}
        </div> -->
      @endforeach
      <input type="submit" value="AJOUTER" class="btn blue">
    </form>
    <br><a href="{{ route('admin') }}">🏠 home page</a>
  </div>
@endsection

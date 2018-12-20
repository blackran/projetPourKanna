@extends("admin/admin")
@section("body")
<div class="block">
  <div id="head">VENTE DE PIECES ELECTRONIQUES</div>
  <ul>
    <?php $i=0; ?>
    @foreach ($vars as $key=>$values)
    <?php $i = $i+1;?>
      <li class="content"><a href="{{ $values }}">{{ $key }}</a></li>
      @if (count($vars)!=$i)
      <hr>
      @endif
    @endforeach
  </ul>
</div>
@endsection

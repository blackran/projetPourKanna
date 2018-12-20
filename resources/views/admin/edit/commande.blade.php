@extends("admin/edit")
@section("containts")
  <div>
      <style media="screen">
        .ajoute{
          width: 130px;
          box-shadow: 0 0 2px;
          padding: 5px 20px;
          border-radius: 5px;
          background: #ffffff;
          position: flex;
          position: relative;
          right: 10px;
        }
        .add{
          display: block;
          display: flex;
          justify-content: flex-end;
        }
        .ajoute a{
          color: black;
          font-size: 20px;
        }
        .ajoute img{
          position: relative;
          top: 5px;
        }
      </style>
      <div class="sea">
        <style media="screen">
          #search{
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 40px;
            padding-left: 20px;
            box-shadow: 0 0 1px;
            font-size: 17px;
            outline: none;
            transition: width 2s;
            background-image: url("{{ asset('/image/search.png')}}");
            background-repeat: no-repeat;
            background-position: bottom right;
          }
          #search:focus{
            width: 300px;
          }
          #sea{
            width: 100px;
            height: 30px;
            border: none;
            border-radius: 5px;
            padding-left: 20px;
            box-shadow: 0 0 1px;
            font-size: 17px
          }
          #search:fucus{
            outline:none;
          }

          .inline{
            display: flex;
            justify-content:space-between;
            padding: 0 10px;
          }
        </style>
        <div class="inline">
          <form class="" action="" method="post" style="margin-bottom: 10px">
            <input type="text" name="" id="search">
            <!-- <input type="button" name="" id="sea" value="Search" style="padding: 5px;"> -->
          </form>
        </div>
      <div class="add">
        <div class="ajoute">
          <a href="{{ route('gajouter',$column) }}"><img src="{{ asset('/image/267-plus.png')}}" width="20" height="20"> ajouter</a>
        </div>
      </div>
    @foreach ($commandes as $commande)
    <div class="HEAD">
      COMMANDE N°{{ $commande->NumCom }}
    </div>
    <div class="contains">
      <div>
        N° Client: {{ $commande->NumCli }}<br>
        REF COMPOSANTE: {{ $commande->RefComp }}<br>
        QUANTITÉ: {{ $commande->QtCom }}<br>
        DATE: {{ $commande->DateCom }}
      </div>
      <a href="/config/{{ $column }}/{{ $name }}/{{ $commande->NumCom }}"><img src="{{ asset('/image/149-cog.png')}}" width="32" height="32"></a>

    </div>
    @endforeach
  </div>
@endsection

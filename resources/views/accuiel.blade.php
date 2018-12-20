@extends("layouts/common", [ "title" => "accuiel" ])
@section("body")
<section id="body">
  <section class="Body left">
    <strong id="in">sing in</strong><br>
    <form class="sing_in" action="index.html" method="post">
      <div class="">
        <label for="" class="block">Nom</label><input type="text" name="" value="" class="block">
        <label for="" class="block">Prenom</label><input type="text" name="" value="" class="block">
        <label for="">Adress</label><input type="text" name="" value="">
        <label for="">Code Postal</label><input type="text" name="" value="">
        <label for="">Ville</label><input type="text" name="" value="">
        <label for="">Telephone</label><input type="text" name="" value="">
        <label for="pays">Civilite</label>
        <select name="pays" id="pays">
          <option value="france">France</option>
          <option value="espagne">Espagne</option>
          <option value="italie">Italie</option>
          <option value="royaume-uni">Royaume-Uni</option>
          <option value="canada">Canada</option>
          <option value="etats-unis">États-Unis</option>
          <option value="chine">Chine</option>
          <option value="japon">Japon</option>
        </select>
      </div>
      <input type="submit" name="" value="valide" id="submit">
    </form>
  </section>
  <section class="Body rigth">
    <section>
      <h1 id="accuiel" class="tit">ACCUIEL</h1>
      <div class="Img">
        @foreach ($names as $name)
          <img src="{{ asset('/image/electronique/'.$name) }}" class="img">
        @endforeach
      </div>
    </section>
    <section>
      <h1 id="produits" class="tit">PRODUITS</h1>
      <div class="Img">
        @foreach ($names as $name)
          <img src="{{ asset('/image/electronique/'.$name) }}" class="img">
        @endforeach
      </div>
    </section>
    <section>
      <h1 id="blog" class="tit">BLOG</h1>
      <div class="Img">
        @foreach ($names as $name)
          <img src="{{ asset('/image/electronique/'.$name) }}" class="img">
        @endforeach
      </div>
    </section>
  </section>

</section>
@endsection

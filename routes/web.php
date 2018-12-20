<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request ;

Route::get('/', function(){
  $date = DATE_FORMAT(NOW(),"Y");
    $menus=array(
      "accuiel"=>"#accuiel",
      "produits"=>"#produits",
      "blog"=>"#blog",
    );
    $names=[
      "49UJ635V_large_02_260717_Football.jpg",
      "bunch_of_computer_stuff_1920x700.png",
      "cache_18554775.png",
      "depositphotos_2484402-stock-illustration-computers-and-electronics-icons.jpg",
      "Materiel-Recyclable-Électronique.jpg",
      "Módulo-ARM-Cortex-A7-–-TQMLS102xA.jpg",
      "pièce-de-circuit-électronique-51397375.jpg",
      "sesd100v2.jpg",
      "wallpaper-991693.jpg"
    ];
    return view('accuiel',["menus" => $menus, "date" => $date, "names" => $names]);
})->name('home');
Route::get('/login', function(){
    return view('login');
})->name('login');
Route::post('/login', function(Request $r){
    $ver = DB::table("T_RESPONSABLE")->where("NomResp",$r->input('name'))->where("passResp",$r->input('password'))->count();
    if($ver!=0){
      return redirect(route("admin"));
    }else{
      return redirect(route("login"));
    }
})->name('plogin');
Route::get('/Admin', function(){
    DB::table("T_CLIENT")->first();
    $vars=array(
      "COMMANDE"=>"/Admin/T_COMMANDE",
      "CLIENTS"=>"/Admin/T_CLIENT",
      "COMPOSANTE"=>"/Admin/T_COMPOSANTE",
      "FACTURE"=>"/Admin/T_FACTURE",
      "LIVRER"=>"/Admin/T_LIVRER",
      "PRODUCTEUR"=>"/Admin/T_PRODUCTEUR",
      "RESPONSABLE"=>"/Admin/T_RESPONSABLE",
    );
    return view('admin/home',["vars"=>$vars]);
})->name("admin");
Route::get('/Admin/T_CLIENT', function(){
    $column = 'T_CLIENT';
    $name = 'NumCli';
    $clients = DB::table($column)->get();
    return view('admin/edit/client', compact('clients','column','name'));
});
Route::get('/Admin/T_COMPOSANTE', function(){
    $column = 'T_COMPOSANTE';
    $name = 'RefComp';
    $composantes = DB::table($column)->get();
    return view('admin/edit/composante', compact('composantes','column','name'));
});
Route::get('/Admin/T_COMMANDE', function(){
    $column = 'T_COMMANDE';
    $name = 'NumCom';
    $commandes = DB::table($column)->get();
    return view('admin/edit/commande', compact('commandes','column','name'));
});
Route::get('/Admin/T_FACTURE', function(){
    $facture = DB::table('T_FACTURE')->get();
    return view('admin/edit/facture', compact('factures'));
});
Route::get('/Admin/T_LIVRER', function(){
    $column = 'T_LIVRER';
    $name = 'NumLiv';
    $livrers = DB::table($column)->get();
    return view('admin/edit/livrer', compact('livrers','column','name'));
});
Route::get('/Admin/T_PRODUCTEUR', function(){
    $column = 'T_PRODUCTEUR';
    $name = 'NumPdr';
    $producteurs = DB::table($column)->get();
    return view('admin/edit/producteur', compact('producteurs','column','name'));
});
Route::get('/Admin/T_RESPONSABLE', function(){
    $column = 'T_RESPONSABLE';
    $name = 'NumResp';
    $responsables = DB::table($column)->get();
    return view('admin/edit/responsable', compact('responsables','column','name'));
});
Route::get('/Admin/{dontKnow}', function($rec){
    return redirect("/Admin/".$rec);
})->name('Admin');
Route::get('/config/{part}/{name}/{id}', function($part,$name,$id){
    $data = DB::table($part)->where($name,$id)->first();
    if($part=="T_CLIENT"){
      $ins=array(
         "NUM"=>"NumCli",
         "CIVILITE"=>"CivilitéCli",
         "NOM"=>"NomCli",
         "PRENOM"=>"PrenomCli",
         "ADRESS"=>"AdressCli",
         "CODE POSTAL"=>"CpCli",
         "VILLE"=>"VilleCli",
         "TELEPHONE"=>"TelCli",
      );
    }elseif($part=="T_COMPOSANTE"){
      $ins=array(
         "REFERENCE"=>"RefComp",
         "NOM"=>"NomComp",
         "LIBELE"=>"LibComp",
         "PRIX"=>"PrixComp",
         "QUANTITÉ"=>"QtComp",
         "DATE DE CREATE"=>"DateCrComp",
         "N° PRODUCTEUR"=>"NumPdr",
      );
    }elseif($part=="T_COMMANDE"){
      $ins=array(
         "NUMERO"=>"NumCom",
         "N° CLIENT"=>"NumCli",
         "REF COMPOSANTE"=>"RefComp",
         "QUANTITÉ"=>"QtCom",
         "DATE"=>"DateCom",
      );
    }elseif($part=="T_LIVRER"){
      $ins=array(
         "NUMERO"=>"NumLiv",
         "N° RESPONSABLE"=>"NumResp",
         "REF COMPOSANTE"=>"RefComp",
         "N° FACTURE"=>"NumFct",
         "DATE"=>"DateLiv",
      );
    }elseif($part=="T_PRODUCTEUR"){
      $ins=array(
         "NUMERO"=>"NumPdr",
         "N° PRODUCTEUR"=>"NomPdr",
         "ADRESS"=>"AdressPdr",
         "CODE POSTAL"=>"CpPdr",
         "VILLE"=>"VillePdr",
         "TELEPHONE"=>"TelPdr",
      );
    }elseif($part=="T_RESPONSABLE"){
      $ins=array(
         "NUMERO"=>"NumResp",
         "NOM"=>"NomResp",
         "ADRESS"=>"AddessResp",
         "PASSWORD"=>"passResp",
      );
    }
    return view('admin/config',compact('part','id','data','name','ins'));
})->name("config");

Route::post('/modif/{part}/{name}/{id}', function($part,$name,$id,Request $request){
      if($part=="T_CLIENT"){
        $req="update ".$part." set CivilitéCli='".$request->input("CivilitéCli")."',NomCli='".$request->input("NomCli")."',PrenomCli='".$request->input("PrenomCli")."',AdressCli='".$request->input("AdressCli")."',CpCli='".$request->input("CpCli")."',VilleCli='".$request->input("VilleCli")."',TelCli='".$request->input("TelCli")."' where NumCli=".$request->input("NumCli");
      }elseif($part=="T_COMPOSANTE"){
        $req="update ".$part." set NomComp='".$request->input("NomComp")."',LibComp='".$request->input("LibComp")."',PrixComp=".$request->input("PrixComp").",QtComp=".$request->input("QtComp").",DateCrComp='".$request->input("DateCrComp")."',NumPdr=".$request->input("NumPdr")." where RefComp=".$request->input("RefComp");
      }elseif($part=="T_COMMANDE"){
        $req="update ".$part." set NumCli=".$request->input("NumCli").",RefComp=".$request->input("RefComp").",QtCom=".$request->input("QtCom").",DateCom='".$request->input("DateCom")."' where NumCom=".$request->input("NumCom");
      }elseif($part=="T_LIVRER"){
        $req="update ".$part." set NumResp=".$request->input("NumResp").",RefComp=".$request->input("RefComp").",NumFct=".$request->input("NumFct").",DateLiv='".$request->input("DateLiv")."' where NumLiv=".$request->input("NumLiv");
      }elseif($part=="T_PRODUCTEUR"){
        $req="update ".$part." set NomPdr='".$request->input("NomPdr")."',AdressPdr='".$request->input("AdressPdr")."',CpPdr='".$request->input("CpPdr")."',VillePdr='".$request->input("VillePdr")."',TelPdr='".$request->input("TelPdr")."' where NumPdr=".$request->input("NumPdr");
      }elseif($part=="T_RESPONSABLE"){
        $req="update ".$part." set NomResp='".$request->input("NomResp")."',AddessResp='".$request->input("AddessResp")."', passResp='".$request->input("AddessResp")."' where NumResp=".$request->input("NumResp");
      }
    DB::update($req);
    return redirect()->route('Admin',$part);
})->name('pconfig');

Route::get('/ajouter/{dontKnow}', function($part){
    if($part=="T_CLIENT"){
      $ins=array(
         "CIVILITE"=>"CivilitéCli",
         "NOM"=>"NomCli",
         "PRENOM"=>"PrenomCli",
         "ADRESS"=>"AdressCli",
         "CODE POSTAL"=>"CpCli",
         "VILLE"=>"VilleCli",
         "TELEPHONE"=>"TelCli",
      );
    }elseif($part=="T_COMPOSANTE"){
      $ins=array(
         "NOM"=>"NomComp",
         "LIBELE"=>"LibComp",
         "PRIX"=>"PrixComp",
         "QUANTITÉ"=>"QtComp",
         "DATE DE CREATE"=>"DateCrComp",
         "N° PRODUCTEUR"=>"NumPdr",
      );
    }elseif($part=="T_COMMANDE"){
      $ins=array(
         "N° CLIENT"=>"NumCli",
         "REF COMPOSANTE"=>"RefComp",
         "QUANTITÉ"=>"QtCom",
         "DATE"=>"DateCom",
      );
    }elseif($part=="T_LIVRER"){
      $ins=array(
         "N° RESPONSABLE"=>"NumResp",
         "REF COMPOSANTE"=>"RefComp",
         "N° FACTURE"=>"NumFct",
         "QUANTITÉ"=>"QtLiv",
         "DATE"=>"DateLiv",
         "LIEU DE LIVRAISON"=>"LieuLiv",
      );
    }elseif($part=="T_PRODUCTEUR"){
      $ins=array(
         "N° PRODUCTEUR"=>"NomPdr",
         "ADRESS"=>"AdressPdr",
         "CODE POSTAL"=>"CpPdr",
         "VILLE"=>"VillePdr",
         "TELEPHONE"=>"TelPdr",
      );
    }elseif($part=="T_RESPONSABLE"){
      $ins=array(
         "NOM"=>"NomResp",
         "ADRESS"=>"AddessResp",
         "PASSWORD"=>"passResp",
      );
    }
    return view("admin/ajouter",compact("part","ins"));
})->name('gajouter');
Route::post('/ajouter/{column}', function($part,Request $request){
      if($part=="T_CLIENT"){
        $req="insert into ".$part." (NomCli,PrenomCli,CivilitéCli,AdressCli,CpCli,VilleCli,TelCli) values ('".$request->input("NomCli")."','".$request->input("PrenomCli")."','".$request->input("CivilitéCli")."','".$request->input("AdressCli")."','".$request->input("CpCli")."','".$request->input("VilleCli")."','".$request->input("TelCli")."')";
      }elseif($part=="T_COMPOSANTE"){
        $req="insert into ".$part." (NomComp,LibComp,PrixComp,QtComp,DateCrComp,NumPdr) values ('".$request->input("NomComp")."','".$request->input("LibComp")."',".$request->input("PrixComp").",".$request->input("QtComp").",'".$request->input("DateCrComp")."',".$request->input("NumPdr").")";
      }elseif($part=="T_COMMANDE"){
        $req="insert into ".$part." (NumCli,RefComp,QtCom,DateCom) values (".$request->input("NumCli").",".$request->input("RefComp").",".$request->input("QtCom").",'".$request->input("DateCom")."')";
      }elseif($part=="T_LIVRER"){
        $req="insert into ".$part." (RefComp,NumResp,NumFct,DateLiv,QtLiv,LieuLiv) values (".$request->input("RefComp").",".$request->input("NumResp").",".$request->input("NumFct").",'".$request->input("DateLiv")."',".$request->input("QtLiv").",'".$request->input("LieuLiv")."')";
      }elseif($part=="T_PRODUCTEUR"){
        $req="insert into ".$part." (NomPdr,AdressPdr,CpPdr,VillePdr,TelPdr) values ('".$request->input("NomPdr")."','".$request->input("AdressPdr")."','".$request->input("CpPdr")."','".$request->input("VillePdr")."','".$request->input("TelPdr")."')";
      }elseif($part=="T_RESPONSABLE"){
        $req="insert into ".$part." (NomResp,AddessResp,passResp) values ('".$request->input("NomResp")."','".$request->input("AddessResp")."','".$request->input("passResp")."')";
      }
    DB::insert($req);
    return redirect()->route('Admin',$part);
})->name('pajouter');
Route::get('/suprimer/{column}/{name}/{id}', function($column,$name,$id){
    DB::table($column)->where($name,$id)->delete();
    return redirect()->route('Admin',$column);
 });

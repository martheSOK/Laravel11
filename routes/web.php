<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   // return view('welcome');
   //return "Hello world";

});

Route::get('/etudiant', function (Request $request) {
    //C'est une injection de dépendence
    //dump($request);
    // return view('welcome');
    //recupère moi la valeur du paramètre name  et age si ils n'existeent pas ce paramètre met aucun name et pas d'age
   //  $name=$_GET["name"] ?? "aucun name";
   //  $age=$_GET["age"] ?? "pas d'âge";

   //ou
   //sauf que avec request lorsque je ne pécise pas les paramètres ile met de valeurs vide
      $name=$request["name"] ;
      $age=$request["age"] ;


   //ou encore
   $name=$request->name ;
   $age=$request->age ;
    
   
    //ou encore avec les input en donnant des valeurs par défaut
    //c'est pas obligatoire les valeurs par défaut("marthe" et "10")
    //donc si au niveau de l'url si je ne précise pas le paramètre j'aurai comme name marthe et age 10
    $name=$request->input("name","marthe") ;
    $age=$request->input("age ","10");
    //return "Etudiant $name  âgé est de $age ans";

 });



//route paramétrique
//l'ordre des élément compte au niveau de l'url c'est à dire si nous voulons que se soit l'id avant le nom dans la fonction alors au niveau de l'url les paramètres doivent respecter celà
//  Route::get('/etudiant/{id}/{name}', function (int $id ,string $name) {
//    return "Etudiant N° $id se nomme $name";
// })->where('id','[0-9]+')->where('name','[a-zA-Z]+');

//route paramétrique optionnel
Route::get('/etudiant/{id}/{name?}', function (int $id ,?string $name=null) {
   return "Etudiant N° $id se nomme $name";
})->where('id','[0-9]+')->where('name','[a-zA-Z]+');
<?php

use App\Models\Commande;
use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
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
   //return "Etudiant N° $id se nomme $name";
})->where('id','[0-9]+')->where('name','[a-zA-Z]+');



Route::get('/users', function () {
   //ici c'est sur la collection que j'applique mon filtre
   $users= DB::table("users")->get()->first();
   dump($users);
   //c'est en base de donné directement le filtre s'applique
   $users= DB::table("users")->first();
   dump($users);
   return "Liste des users";

});

Route::get('entreprises',function(){
    $entreprises=[
        ["user_id" => 1,
        "nom" => "SOTOKO",
        "pays" => "Togo",
        "ville" => "sokodé",
        "quartier" => "administratif",
        "adresse" => "rue1"
        ],

        ["user_id" => 1,
        "nom" => "TOPSAHO",
        "pays" => "Togo",
        "ville" => "Lomé",
        "quartier" => "totchi",
        "adresse" => "rue2"
        ],

        ["user_id" => 2,
        "nom" => "FUSEC",
        "pays" => "Togo",
        "ville" => "Lomé",
        "quartier" => "totchi1",
        "adresse" => "rue3"
        ],

        ["user_id" => 2,
        "nom" => "NAGODE",
        "pays" => "Togo",
        "ville" => "Lomé",
        "quartier" => "totchi1",
        "adresse" => "rue4"
        ],
        ["user_id" => 2,
            "nom" => "TRANSFORMATION",
            "pays" => "Togo",
            "ville" => "Lomé",
            "quartier" => "totchi1",
            "adresse" => "rue5"
        ]

    ];

    // foreach ($entreprises as $entreprise) {
    //     $e=new Entreprise();
    //     $e->user_id=$entreprise["user_id"];
    //     $e->nom=$entreprise["nom"];
    //     $e->pays=$entreprise["pays"];
    //     $e->ville=$entreprise["ville"];
    //     $e->quartier=$entreprise["quartier"];
    //     $e->adresse=$entreprise["adresse"];
    //     $e->save();
    //

    // }
    //find retourn un objet
    //$une_entreprise=Entreprise::find(1);

    //ce qui suit retourn une collection
    //$une_entreprise=Entreprise::where("id","=",1)->get();


    //$une_entreprise=Entreprise::where("id",">",1)->get();
    //dump($une_entreprise);

    // $une_entreprise=Entreprise::where("id",[1,3])->get();
    // dump($une_entreprise);

    //dump($une_entreprise);
   // dump(Entreprise::all());



    //update
//    $une_entreprise=Entreprise::find(1);
//    $une_entreprise->quartier = "niamtougou";
//    $une_entreprise->save();
//    dump($une_entreprise);

   //supprimer
//    $une_entreprise=Entreprise::find(2);
//    $une_entreprise->delete();
   //dump(Entreprise::all());



   //comment accéder ou afficher les/au entreprise d'un user en  passant par eloquente

    $user = User::find(1);
    $user_entreprise=$user->entreprises;
    //dump($user_entreprise);

    //comment accéder ou afficher les/au entreprise d'un user sans eloquente
    $user = User::find(1);
    $entreprise=Entreprise::where("user_id",$user->id)->get();
    //dump($entreprise);


   //comment savoir ou afficher le proprietaire d'une entreprise
   $entre=Entreprise::find(1);
   $proprietaire=$entre->user;
    //dump($proprietaire);





    //creation d'instance de commande

    $commandes=[
        [
            "user_id" => 1,
            "date_commande" => "10-06-2024",
        ],
        [
            "user_id" => 2,
            "date_commande" => "06-06-2024",
        ],

        [
            "user_id" => 2,
            "date_commande" => "08-06-2024",
        ]

        ];


        // foreach ($commandes as $une_commande) {
        //    $commande=new Commande();
        //    $commande->user_id = $une_commande["user_id"];
        //    $commande->date_commande = $une_commande["date_commande"];

        //    $commande->save();
        // }
        // dump(Commande::all());



        //je veux le user qui a effectuer la commande num 2 avec eloquente
        $commede2=Commande::find(2);
        $user_commande2=$commede2->user;
        //dump($user_commande2);



        //je veux les commandes de l'utilisateur 2
        $user2=User::find(2);
        $commande_user2 = $user2->commandes;
        dump($commande_user2);

   return "List des données";
});


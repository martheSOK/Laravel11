<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

use App\Http\Controllers\HasMiddleware;

class EntrepriseController extends Controller
{
    //use HasMiddleware;

    // public function __construct()
    // {
    //     $this->middleware('entreprisemiddleware');
    // }

    // public function __construct()
    // {
    //     $this->middleware('entreprisemiddleware')->only('index');
    //     // ou pour plusieurs méthodes
    //     // $this->middleware('entreprisemiddleware')->only(['index', 'show']);
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$entreprises=Entreprise::all();
        $data=[
            "titre" =>"Liste de toutes les entreprises",
            "liste_entreprise" => Entreprise::all(),
        ];

        return view("entreprises.index")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users=User::all();
        return view("entreprises.create", compact("users"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $validator = Validator::make($request->all(), [
        //     'nom' => 'required|alpha|min:3|max:255|regex:[a-zA-Z]+',
        //     'pays' => 'required|string|min:3|max:255',
        //     'ville' => 'required|string|min:3|max:255',
        //     'quartier' => 'required|string|min:3|max:255',
        //     'adresse'=> 'required|string|max:255',

        // ])->validate();


        $validator=$request->validate([
            'nom' => 'required|alpha|min:3|max:255',
            'pays' => 'required|string|min:3|max:255',
            'ville' => 'required|string|min:3|max:255',
            'quartier' => 'required|string|min:3|max:255',
            'adresse'=> 'required|string|max:255',
            'user_id'=>'required'
        ]);

        //dd($validator);
        // if ($validator) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        //Creation d'une instance de entreprise
        $entreprise=Entreprise::create($validator);
        //Autre façon de créer une instance
        // $entreprise=Entreprise::create([
        //     'user_id'=>$request->user_id,
        //     'nom'=>$request->nom,
        //     'pays'=>$request->pays,
        //     'ville'=>$request->ville,
        //     'quartier'=>$request->quartier,
        //     'adresse'=>$request->adresse,

        // ]);
        return redirect()->route('entreprises.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        //
        //$une_entreprise = Entreprise::findOrFail($entreprise);
        return view('entreprises.show',compact('entreprise'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        //
        $users=User::all();
        return view("entreprises.edit" ,compact('entreprise','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        //


        $validator=$request->validate([
            'nom' => 'required|alpha|min:3|max:255',
            'pays' => 'required|string|min:3|max:255',
            'ville' => 'required|string|min:3|max:255',
            'quartier' => 'required|string|min:3|max:255',
            'adresse'=> 'required|string|max:255',
        ]);


        // if ($validator) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $entreprise->update($validator);
        // $entreprise->nom=$request->nom;
        // $entreprise->pays=$request->pays;
        // $entreprise->ville=$request->ville;
        // $entreprise->quartier=$request->quartier;
        // $entreprise->adresse=$request->adresse;


        // $entreprise->save();

        return redirect()->route('entreprises.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)

    {
        //
        $entreprise->delete();
        return redirect(route("entreprises.index"));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class EvenementController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [

            //'permission:create entreprise',
            new Middleware('permission:liste_evenement', only:['index']),
            new Middleware('permission:create_evenement', only: ['create','store']),
            new Middleware('permission:delete_evenement',only:['destroy']),
            new Middleware('permission:edit_evenement',only:['edit','update']),
            new Middleware('permission:voir_evenement', only: ['show']),

        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data=[
            "titre" =>"Liste de tous les evenements",
            "liste_evenement" => Evenement::all(),
        ];

        return view("evenements.index")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $entreprises=Entreprise::all();
        return view('evenements.create',compact("entreprises"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator=$request->validate([
        'entreprise_id'=>'required',
        'nom' => 'required|alpha|min:3|max:255',
        'pays'=>'required|string|min:3|max:255',
        'ville'=>'required|string|min:3|max:255',
        'adresse'=>'required|string|min:3|max:255',
        'gps'=> 'required',
        'description'=>'required|string',
        'date_event'=>'required|date',
        'heur_debut'=>'required',
        'heur_fin' =>'required',

        ]);

        //dd($validator);

        Evenement::create($validator);
        return redirect()->route('evenements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        //
        $entreprises=Entreprise::all();
        return view('evenements.show', compact('evenement','entreprises'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        //
        $entreprises=Entreprise::all();
        return view('evenements.edit',compact("entreprises","evenement"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evenement $evenement)
    {
        //
        $validator= $request->validate([
            'entreprise_id'=>'required',
            'nom' => 'required|alpha|min:3|max:255',
            'pays'=>'required|string|min:3|max:255',
            'ville'=>'required|string|min:3|max:255',
            'adresse'=>'required|string|min:3|max:255',
            'gps'=> 'required',
            'description'=>'required',
            'date_event'=>'required|date',
            'heur_debut'=>'required',
            'heur_fin' =>'required',

            ]);

            // $evenement->nom=$request->nom;
            // $evenement->pays=$request->pays;
            // $evenement->ville=$request->ville;
            // $evenement->adresse=$request->adresse;
            // $evenement->gps=$request->gps;
            // $evenement->description=$request->description;
            // $evenement->heur_debut=$request->heur_debut;
            // $evenement->heur_fin=$request->heur_fin;
            // $evenement->entreprise_id=$request->entreprise_id;

            //$evenement->save();

            $evenement->update($validator);

            return redirect()->route('evenements.index');
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        //
        $evenement->delete();
        return redirect()->route('evenements.index');

    }
}

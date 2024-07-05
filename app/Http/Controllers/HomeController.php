<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    // public function show_welcome(){
    //     return view('home.welcome');
    // }


    // public function show_about(){
    //     return view('home.about');
    // }

    // public function show_contact_us(){
    //     return view('home.contact');
    // }


    public function index(Request $request)
    {
        //
        // $trajets = Trajet::paginate(4);
        $query = Evenement::paginate(4);
        $query = Evenement::query();



        if (isset($request->pays) && ($request->pays != null)) {
            $query->where('pays', $request->pays);
        }

        if (isset($request->ville) && ($request->ville != null)) {
            $query->where('ville', $request->ville);
        }

        if (isset($request->date_event) && ($request->date_event != null)) {
            $query->where('date_event', $request->date_event);
        }

        if (isset($request->heur_debut) && ($request->heur_debut != null)) {
            $query->where('heur_debut', $request->heur_debut);
        }

        if (isset($request->heur_fin) && ($request->heur_fin != null)) {
            $query->where('heur_fin', $request->heur_fin);
        }



        $evenements = $query->get();

        return view('home.index',compact('evenements'));
    }

    public function show(Evenement $evenement)
    {
        return view('home.show', ['evenement' => $evenement]);
    }

}

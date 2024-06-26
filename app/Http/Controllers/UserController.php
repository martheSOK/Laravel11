<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        {
            $data=[
                "titre" =>"Liste de toutes les utilisateurs",
                "liste_users" => User::all(),
            ];
            return view('auth.index')->with($data);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=> ['required', 'string', 'max:255'],
            'prenom'=> ['required', 'string', 'max:255'],
            'contact'=> ['required', 'string', 'max:255'],
            'status'=> ['required', 'string', 'max:255'],
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'contact'=>$request->contact,
            'status'=>$request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return view('auth.show',compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('auth.edit',compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $validator=$request->validate([
            'nom'=> ['required', 'string', 'max:255'],
            'prenom'=> ['required', 'string', 'max:255'],
            'contact'=> ['required', 'string', 'max:255'],
            'status'=> ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user->update($validator);
        return redirect()->route('users.index');
    }


    public function destroy(User $user)

    {
        //
        $user->delete();
        return redirect(route('users.index'));
    }
}

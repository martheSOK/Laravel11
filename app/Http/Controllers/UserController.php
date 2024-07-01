<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
class UserController extends Controller implements HasMiddleware
{


    public static function middleware(): array
    {

        return [

            new middleware('permission:liste_user', only:['index']),
            new middleware('permission:create_user', only:['create', 'store']),
            new middleware('permission:edit_user', only:['edit', 'update']),
            new middleware('permission:voir_user', only:['show']),
            new middleware('permission:delete_user', only:['destroy']),

        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dump(Auth::user()->roles->first()->permissions);
        // dump(Auth::user()->permissions);

            $data=[
                "titre" =>"Liste de toutes les utilisateurs",
                "liste_users" => User::all(),
            ];
            return view('users.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('users.create');
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
            'roles'=> ['required', 'string', 'max:255'],
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required' ],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'contact'=>$request->contact,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole($request->roles);
        return redirect()->route('users.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return view('users.show',compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('users.edit',compact("user"));
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
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

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){

        $page = "Users";
        $users = User::all();

        return view('backoffice.user.all', compact('page', 'users'));
    }

    public function destroy($id){

        $user = User::find($id);
        Storage::disk('public')->delete('img/' . $user->pdp);
        $user->delete();

        return redirect()->back();
    }

    public function edit($id)   
    {
        $user = User::find($id);
        $page = 'Edit User';

        return view('backoffice.user.edit', compact('user', 'page'));
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        Storage::disk('public')->delete('img/' . $user->pdp);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->pdp = $request->file('pdp')->hashName();
        $user->updated_at = now();

        $user->save();
        $request->file('pdp')->storePublicly('img', 'public');

        return redirect()->route('users');
    }

    public function create()
    {
        $page = 'Create User';

        return view('backoffice.user.create', compact('page'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "max:30|required",
            "prenom"=>"max:30|required",
            "age" => "required",
            "email" => "required",
            "password" => "required",
            "pdp" => "required"
        ]);
        $user = new User();

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->pdp = $request->file('pdp')->hashName();
        $user->created_at = now();

        $user->save();
        $request->file('pdp')->storePublicly('img', 'public');

        return redirect('users')->with('message', 'Successfully created a user');
    }

    public function download($id)
    {
        $user = User::find($id);

        return Storage::disk('public')->download('img/' . $user->pdp);
    }

    public function show($id)
    {
        $user = User::find($id);
        $page = $user->nom;
        return View('backoffice.user.show', compact('page', 'user'));
    }
}

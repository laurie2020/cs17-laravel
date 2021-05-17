<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $page = "Users";
        $users = User::all();
        return view('backoffice.user.all', compact('page', 'users'));
    }

    public function destroy($id){
        
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

    public function edit($id){

        $page = "Edit User";
        $user = User::find($id);

        return view('backoffice.user.edit', compact('user', 'page'));
    }

    public function update($id, Request $request){


        $user = User::find($id);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->photo = $request->photo;
        $user->updated_at = now();

        $user->save();

        return redirect()->route('users');

    }
    
    public function create(){

        $page = "Create User";

        return view('backoffice.user.create', compact('page')); 
    }

    public function store(Request $request){

        $user = new User();

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->photo = $request->photo;
        $user->created_at = now();

        $user->save();

        return redirect()->route('users');
    }
}

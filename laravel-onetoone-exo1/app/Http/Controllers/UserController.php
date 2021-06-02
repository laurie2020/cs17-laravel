<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view("users", compact("users"));
    }

    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        $profil = new Profil();

        $profil->name = $request->name;
        $profil->age = $request->age;
        $profil->phone = $request->phone;

        $profil->save();

        $user = new User();
        $user->email = $request->email;
        $user->nickname = $request->nickname;
        $user->profil_id = $profil->id;

        $user->save();

        return redirect()->route("user");
    }
}

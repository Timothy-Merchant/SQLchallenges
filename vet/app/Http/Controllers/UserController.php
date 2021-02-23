<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {        
        $ownersFromDb = User::all();
        return view('welcome', ['users' => $ownersFromDb]);
    }

    public function show(User $user)
    {                  
        return view('show', ['user' => $user]);
    }

    public function create()
    {
        return view('form');
    }

    public function createPost(Request $request)
    {        
        $data = $request->all();        
        $user = User::create($data);        
        return redirect("/users/{$user->id}");
    }

    public function update(User $user)
    {                
        return view("form", ['user' => $user]);
    }

    public function updatePost(User $user, Request $request)
    {                
        $data = $request->all();
        $user->update($data);
        $user->save();

        return redirect("/users/{$user->id}")->with('message', 'User has been updated!');
    }
}

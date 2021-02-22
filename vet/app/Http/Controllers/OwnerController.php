<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\OwnerRequest;

class OwnerController extends Controller
{
    public function index()
    {        
        $ownersFromDb = Owner::all();
        return view('welcome', ['owners' => $ownersFromDb]);
    }

    public function show(Owner $owner)
    {                  
        return view('show', ['owner' => $owner]);
    }

    public function create()
    {
        return view('form');
    }

    public function createPost(OwnerRequest $request)
    {        
        $data = $request->all();        
        $owner = Owner::create($data);        
        return redirect("/owners/{$owner->id}");
    }

    public function update(Owner $owner)
    {                
        return view("form", ['owner' => $owner]);
    }

    public function updatePost(Owner $owner, OwnerRequest $request)
    {                
        $data = $request->all();
        $owner->update($data);
        $owner->save();

        return redirect("/owners/{$owner->id}")->with('message', 'User has been updated!');
    }
}

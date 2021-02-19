<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\OwnerRequest;

class OwnerController extends Controller
{
    public function index()
    {
        // $ownersFromDb = collect();
        $ownersFromDb = Owner::all();
        return view('welcome', ['owners' => $ownersFromDb]);
    }

    public function show(Owner $owner)
    {
        // Create a show method and route /owners/{owner} to it, so that it displays the relevant information for the specified owner ID
        // Pass the Owner object in from the controller
        // Use Route Model Binding to get 404s working
        // $owner = Owner::find($owner);                
        return view('show', ['owner' => $owner]);
    }

    public function create()
    {
        return view('form');
    }

    public function createPost(OwnerRequest $request)
    {
        // get all of the submitted data
        $data = $request->all();
        // create a new article, passing in the submitted data
        $owner = Owner::create($data);
        // redirect the browser to the new article
        return redirect("/owners/{$owner->id}");
    }

    public function update()
    {
        return view('update');
    }

    public function updatePost(OwnerRequest $request)
    {
        $owner = Owner::find($id);
        $owner->whatever = $whatever;
        $owner->save();

        return redirect("/owners/{$owner->id}")->with('message', 'User has been updated!');
    }
}

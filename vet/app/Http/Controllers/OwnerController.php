<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

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
}

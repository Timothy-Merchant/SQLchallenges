<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnimalRequest;
use App\Http\Resources\AnimalResource;


class AnimalController extends Controller
{
    public function index(Owner $owner)
    {
        $animalsFromDb = $owner->animals;
        return view('animals', ['animals' => $animalsFromDb]);
    }

    public function show(Animal $animal)
    {
        return view('show', ['animal' => $animal]);
    }

    public function create()
    {
        $formHeader = "Create animal";
        $formButton = "Create";
        return view('animalform', ['formHeader' => $formHeader, 'formButton' => $formButton]);
    }

    public function createPost(Request $request, Owner $owner)
    {
        $data = $request->all();
        $animal = new Animal($data);
        $animal->owner()->associate($owner);
        // $animal->setTreatments($request->get("treatments"));
        $animal->owner_id = $owner->id;
        $animal->save();
        return redirect("/animals/{$animal->id}");
    }

    public function update(Animal $animal)
    {
        $formHeader = "Update {$animal->name}";
        $formButton = "Update";
        return view("animalform", ['formHeader' => $formHeader, 'formButton' => $formButton]);
    }

    public function updatePost(Animal $animal, Request $request)
    {
        $data = $request->all();
        $animal->update($data);
        $animal->save();
        $animal->setTags($request->get("treatments"));
        return redirect("/animals/{$animal->id}")->with('message', 'User has been updated!');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Models\Owner;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\OwnerRequest;
use App\Http\Resources\API\OwnerResource;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        return $owners;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerRequest $request)
    {
        $data = $request->all();

        return Owner::create($data);
    }    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(OwnerRequest $owner)
    {
        return new OwnerResource($owner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OwnerRequest $request, Owner $owner)
    {
        // get the request data
        $data = $request->all();
        // update the article using the fill method
        // then save it to the database
        $owner->fill($data)->save();
        // return the updated version
        return $owner;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
        return response(null, 204);
    }
}

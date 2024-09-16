<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use Illuminate\Http\Request;


class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getLocations($id)
    {

        // Obtener detalles del usuario por ID
        $locations = Location::where('countrie_id', $id)->orderBy('order')->get();
        //$locations = Location::all();

        if ($locations) {
            return response()->json($locations);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $location = new Location();
        $location->countrie_id = $request->input('countrie_id');
        $location->Order = $request->input('Order');
        $location->Name = $request->input('Name');
        $location->Url = "";
        $location->created_at = date('Y-m-d H:i:s');
        $location->updated_at = date('Y-m-d H:i:s');

        $location->save();

        $locations = Location::where('countrie_id', $location->countrie_id)->orderBy('order')->get();
        //$locations = Location::all();

        if ($locations) {
            return response()->json($locations);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, $countrie_id)
    {
        $location = Location::findOrFail($id);
        $location->delete();

        $locations = Location::where('countrie_id', $countrie_id)->orderBy('order')->get();
        //$locations = Location::all();

        if ($locations) {
            return response()->json($locations);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }
}

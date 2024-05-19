<?php

namespace App\Http\Controllers;

use App\Http\Requests\RaceRequest;
use App\Models\Driver;
use App\Models\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{

    public function index() {

        $races = Race::with('driver')->orderBy('created_at', 'asc')->paginate(25) ; 

        return view('races.index', [
            'races' => $races
        ]) ; 

    }
   
    
    public function create()
    {

        $race = new Race() ; 

        $race->fill([
            'starting_point' => 'Point de depart',
            'arrival_point' => 'Point d\'arrivee',

        ]) ; 

        return view('races.form', [
            'race' => $race,
            'drivers' => Driver::pluck('name', 'id')
        ]) ; 
    }


    public function store(RaceRequest $request)
    {
        //$dates = $request->validated() ; 

        Race::create($request->validated()) ; 

        return to_route('home.index')->with('success', 'La course a bien été ajouté') ; 
    }


    public function edit(Race $race)
    {
        return view('races.form', [
            'race' => $race,
            'drivers' => Driver::pluck('name', 'id')
        ])  ; 
    }

   
    public function update(RaceRequest $request, Race $race)
    {
        $race->update($request->validated()) ; 

        return to_route('home.index')->with('success', 'La course a bien été modifiée') ; 
    }

    
    public function destroy(Race $race)
    {
        $race->delete() ; 

        return to_route('home.index')->with('success', 'La course a bien été supprimée') ; 
    }
}

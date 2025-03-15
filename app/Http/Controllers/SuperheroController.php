<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;
use App\Models\SuperHero;
use App\Models\Gender;




// $universes = Universe::all();
 //return view('universes.index', compact ('universes'));

class SuperHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::select('id','name')->get();
        return view('superheroes.create',compact('genders'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        SuperHero::create([
            'gender_id'    => $request -> gender_id,
            'real_name'    => $request -> real_name,
            'universe_id'  => 1,
            'name'         => 'Peter Parker',
            'pictures'     => ''
        ]);

        return to_route('superheroes.index');

        
    }
       
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superhero =superHero::find($id);
        return view('superheroes.show',compact('superhero'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

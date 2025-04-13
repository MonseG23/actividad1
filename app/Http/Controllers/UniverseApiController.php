<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;


class UniverseApiController extends Controller
{
    public function index(){
        $universes = Universe:: with('superheroes')->get();
        return response()->json($universes);
    }


    /* public funcion show($id){
        $universes = Universe:: with('superheroes')->findOrFail($id);
        return response()->json($universes);
     }*/


     public function show ($name ){
        $universe = Universes::where('name',$name)->whith('superheroes')->get();
        return response()->json($universe);

     }




}
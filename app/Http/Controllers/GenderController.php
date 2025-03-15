<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    Public function index(){
    //(Gender::all());
    $gender = Gender::all();
    return view('gender', compact('gender'));
    }
/**
* Show the form for creating a new resource.
*/
    
    public function create()
    {
        
        $genders = Gender::select('id', 'name') -> get();
        return view('genders.create', compact('genders'));
    
    }
/**
 * Store a newly created resource in storage.
*/
    public function store(Request $request)
    {
        
        Gender::create([
            'name' => $request->name,
        ]);
        return to_route('genders.index');
        
    }
       
/**
* Display the specified resource.
*/
    public function show(string $id)
    {
        $gender = Gender::find($id);
        return view('genders.show', compact('gender'));
    }

}

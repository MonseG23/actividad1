<?php

use Illuminate\Support\Facades\Route;
use App\Models\universal;
use App\Http\Controllers\GenderController;


Route::get('/', function () {
    //return view('welcome');
    echo 'hello guys! this is y first laravel application';
    echo '<pre>';
    print_r (universe ::all());
    echo '<pre>';
    
    dump (universe ::all());
    //SELECT FROM universes
    //return view('welcome');
});

Route::get('/gender',[GenderController::class, 'index']);
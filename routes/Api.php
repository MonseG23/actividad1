<?php
 
 
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\UniverseApi;
 use App\Http\Controllers\GenderApi;
 use App\Http\Controllers\SuperHeropApi;
 
 Route::get('/user', function (Request $request) {
     return $request->user();
 })->middleware('auth:sanctum');
 
 Route::get('/uApi',[UniverseApi::class,'index']);
 Route::get('/uApi/{name}',[UniverseApi::class,'show']);
 
 Route::get('/genApi',[GenderApi::class,'index']);
 Route::get('/genapi/{name}',[GenderApi::class,'show']);
 
 Route::get('/spApi',[SuperHeropApi::class,'index']);
 Route::get('/spApi/{name}',[SuperHeropApi::class,'show']);
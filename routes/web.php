<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SearchController;

//Rotta Homepage
Route::get('/', [PublicController::class , 'home'])->name('home');

//Rotta dettaglio album
Route::get('/album/{id}', [PublicController::class , 'album'])->name('album');

//Rotta ricerca Album
Route::post('/search' , [SearchController::class, 'search'])->name('search');
<?php

use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Entreprise;

//Route::get('/users',[UserController::class,'afficher_users']);


Route::get('/',[HomeController::class,'show_welcome'])->name("welcome");
Route::get('/about',[HomeController::class,'show_about'])->name("about");
Route::get('/contact',[HomeController::class,'show_contact_us'])->name("contact");

//route for management entreprise
Route::get('/entreprises',[EntrepriseController::class,'index'])->name("entreprises.index");
Route::get('/entreprises/create',[EntrepriseController::class,'create'])->name("entreprises.create");
Route::post('/entreprises/store',[EntrepriseController::class,'store'])->name("entreprises.store");
Route::get('/entreprises/{entreprise}',[EntrepriseController::class,'show'])->name("entreprises.show");
Route::get('/entreprises/{entreprise}/edit',[EntrepriseController::class,'edit'])->name("entreprises.edit");
Route::put('/entreprises/{entreprise}',[EntrepriseController::class,'update'])->name("entreprises.update");
Route::delete('/entreprises/{entreprise}',[EntrepriseController::class,'destroy'])->name("entreprises.delete");



Route::get('/evenements',[EvenementController::class,'index'])->name("evenements.index");
Route::get('/evenements/create',[EvenementController::class,'create'])->name("evenements.create");
Route::post('/evenements/store',[EvenementController::class,'store'])->name("evenements.store");
Route::get('/evenements/{evenement}',[EvenementController::class,'show'])->name("evenements.show");
Route::get('/evenements/{evenement}/edit',[EvenementController::class,'edit'])->name("evenements.edit");
Route::put('/evenements/{evenement}',[EvenementController::class,'update'])->name("evenements.update");
Route::delete('/evenements/{evenement}',[EvenementController::class,'destroy'])->name("evenements.delete");

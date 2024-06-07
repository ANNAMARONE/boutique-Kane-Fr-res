<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;

Route::get('/',[CategorieController::class,'ajoutecategorie'])->middleware('App\Http\Middleware\Auth');
Route::post('/categorie',[CategorieController::class,'categorie'])->name('Categorie.categorie');
//affichage categorie
Route::get('/categorie',[CategorieController::class,'AffichageCategorie']);
//afficher le formulairesn de cration de compte
Route::get('/compte',[AdminController::class,'compte']);
//creation de compte
Route::post('/CreationCompt',[AdminController::class, 'CreationCompt'])->name('User.CreationCompt');
//afficher le fomulaire de connexion
Route::get('/connexion',[AdminController::class,'connexion']);

//faire la connexion
Route::post('/connexion',[AdminController::class, 'seconnecter'])->name('User.seconnecter');
//faire la de connexion

//ajouter un produit
 Route::get('/produit',[ProduitController::class,'ajouteproduit'])->middleware('App\Http\Middleware\Auth');

Route::delete('/deconnexion',[AdminController::class, 'deconnexion'])->name('User.deconnexion');
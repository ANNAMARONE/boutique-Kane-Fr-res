<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;

Route::get('/',[CategorieController::class,'ajoutecategorie'])->middleware('App\Http\Middleware\Auth');
Route::post('/categorie',[CategorieController::class,'categorie'])->name('Categorie.categorie');
//affichage categorie
Route::get('/categorie',[CategorieController::class,'AffichageCategorie']);
//recuperation des donnée du formulaire
Route::get('/categorie/{id}/edit',[CategorieController::class,'editcategorie'])->name('Categorie.editcategorie');
//modifier un categorie
Route::delete('/supcategorie/{id}',[CategorieController::class,'suppresion'])->name('Categorie.suppresion');
Route::post('/categories/{id}',[CategorieController::class,'editcategorie'])->name('Categorie.modifier');
//afficher le formulairesn de cration de compte
Route::get('/compte',[AdminController::class,'compte']);
//creation de compte
Route::post('/CreationCompt',[AdminController::class, 'CreationCompt'])->name('User.CreationCompt');
//afficher le fomulaire de connexion
Route::get('/connexion',[AdminController::class,'connexion']);

//faire la connexion
Route::post('/connexion',[AdminController::class, 'seconnecter'])->name('User.seconnecter');
//faire la de connexion
Route::delete('/deconnexion',[AdminController::class, 'deconnexion'])->name('User.deconnexion');
//afficher le formulaire ajouter de produit
 Route::get('/produit',[ProduitController::class,'produit'])->middleware('App\Http\Middleware\Auth');
//ajouter un produit dans la base de donnée
Route::post('/produit',[ProduitController::class,'ajouteproduit'])->name('Produit.ajouteproduit');
Route::get('/produits',[ProduitController::class,'affichagerproduits'])->name('Produit. affichagerproduits');

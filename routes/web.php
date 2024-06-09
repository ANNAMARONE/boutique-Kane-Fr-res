<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UtilisateurController;

Route::get('/',[ProduitController::class,'affichagerproduits'])->name('Produit. affichagerproduits');
Route::get('/categorie',[CategorieController::class,'ajoutecategorie'])->middleware('App\Http\Middleware\Auth');
Route::post('/categorie',[CategorieController::class,'categorie'])->name('Categorie.categorie');
//affichage categorie
Route::get('/categorie',[CategorieController::class,'ajoutecategorie']);
//recuperation des donnée du formulaire
Route::get('/categorie/{id}/edit',[CategorieController::class,'editcategorie'])->name('Categorie.editcategorie');
//modifier un categorie
Route::delete('/supcategorie/{id}',[CategorieController::class,'suppresion'])->name('Categorie.suppresion');
Route::post('/categories/{id}',[CategorieController::class,'modifier'])->name('Categorie.modifier');
//afficher le formulairesn de cration de compte

//afficher le formulaire ajouter de produit
 Route::get('/produit',[ProduitController::class,'produit'])->middleware('App\Http\Middleware\Auth');
//ajouter un produit dans la base de donnée
Route::post('/produit',[ProduitController::class,'ajouteproduit'])->name('Produit.ajouteproduit');
//afficher tout les produit dusponibles
Route::get('/produits',[ProduitController::class,'affichagerproduits'])->name('Produit. affichagerproduits');
//afficher les detail d'un produit
Route::get('/detailProduit/{id}',[ProduitController::class,'afficherdetail'])->name('Produit. afficherdetail');
//=============================================================================================================


Route::get('/compte',[AdminController::class,'compte']);
//creation de compte
Route::post('/CreationCompt',[AdminController::class, 'CreationCompt'])->name('User.CreationCompt');
//afficher le fomulaire de connexion
Route::get('/connexion',[AdminController::class,'connexion']);

//faire la connexion
Route::post('/connexion',[AdminController::class, 'seconnecter'])->name('User.seconnecter');
//faire la de connexion
Route::delete('/deconnexion',[AdminController::class, 'deconnexion'])->name('User.deconnexion');
//supprimer un produit
Route::delete('/supProduit/{id}',[AdminController::class,'supprimerP'])->name('Admin.supprimerP');
//modifier un produit
Route::get('/modifie/{id}/edit',[AdminController::class,'modifProduit'])->name('Admin.modifProduit');
Route::post('/modification/{id}',[AdminController::class,'update'])->name('Admin.update');
//====================================================================================================


//Affichage formulaire des information de l'utilisateur
Route::get('/formulaie',[UtilisateurController::class,'formulaire'])->name('Utilisteur.formulaire');
//formulaire des information de l'utilisateur
Route::post('/information',[UtilisateurController::class,'ajouteInfo'])->name('Utilisteur.ajouteInfo');

//Affichage tableau de bord admin
Route::get('/admin',[AdminController::class,'dasbord']);

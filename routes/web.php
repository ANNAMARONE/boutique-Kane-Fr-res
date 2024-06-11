<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UtilisateurController;

Route::get('/',[ProduitController::class,'affichagerproduits'])->name('Produit. affichagerproduits');
Route::get('/categorie',[CategorieController::class,'ajoutecategorie'])->middleware('App\Http\Middleware\Auth');
Route::post('/categorie',[CategorieController::class,'categorie'])->name('Categorie.categorie')->middleware('auth');
//affichage categorie
Route::get('/categorie',[CategorieController::class,'ajoutecategorie'])->middleware('App\Http\Middleware\Auth')->middleware('auth');
//recuperation des donnée du formulaire
Route::get('/categorie/{id}/edit',[CategorieController::class,'editcategorie'])->name('Categorie.editcategorie')->middleware('auth');
//modifier un categorie
Route::delete('/supcategorie/{id}',[CategorieController::class,'suppresion'])->name('Categorie.suppresion')->middleware('auth');
Route::post('/categories/{id}',[CategorieController::class,'modifier'])->name('Categorie.modifier')->middleware('auth');
//afficher le formulairesn de cration de compte

//afficher le formulaire ajouter de produit
 Route::get('/produit',[ProduitController::class,'produit'])->middleware('auth');
//ajouter un produit dans la base de donnée
Route::post('/produit',[ProduitController::class,'ajouteproduit'])->name('Produit.ajouteproduit')->middleware('auth');
//afficher tout les produit dusponibles
Route::get('/produits',[ProduitController::class,'affichagerproduits'])->name('Produit. affichagerproduits')->middleware('auth');
//afficher les detail d'un produit
Route::get('/detailProduit/{id}',[ProduitController::class,'afficherdetail'])->name('Produit. afficherdetail');
//=============================================================================================================


Route::get('/compte',[AdminController::class,'compte']);
//creation de compte
Route::post('/CreationCompt',[AdminController::class, 'CreationCompt'])->name('User.CreationCompt');
//afficher le fomulaire de connexion
Route::get('/connexion',[AdminController::class,'connexion']);

//faire la connexion
Route::post('/connexion',[AdminController::class, 'seconnecter'])->name('login');
//faire la de connexion
Route::delete('/deconnexion',[AdminController::class, 'deconnexion'])->name('User.deconnexion');
//supprimer un produit
Route::delete('/supProduit/{id}',[AdminController::class,'supprimerP'])->name('Admin.supprimerP');
//modifier un produit
Route::get('/modifie/{id}/edit',[AdminController::class,'modifProduit'])->name('Admin.modifProduit');
Route::post('/modification/{id}',[AdminController::class,'update'])->name('Admin.update');
//====================================================================================================




//Affichage tableau de bord admin
Route::get('/admin',[AdminController::class,'dasbord']);

Route::get('/commande/{id}',[CommandeController::class,'valide'])->middleware('auth');
Route::get('/commande/{id}',[CommandeController::class,'affichercommande'])->name('Commmande.affichercommande');
Route::get('/utilisateurcommande/{id}',[CommandeController::class,'afficherutilisateur'])->middleware('auth');

Route::post('/validecommande',[CommandeController::class,'validecommande'])->name('Commmande.validecommande')->middleware('auth');

//Affichage formulaire des information de l'utilisateur

//formulaire des information de l'utilisateur
Route::post('/information',[UtilisateurController::class,'ajouteInfo'])->name('Utilisteur.ajouteInfo');

Route::get('/utilisconnexion',[UtilisateurController::class,'useconnecter']);

//faire la connexion
Route::post('/utilisconnexion',[UtilisateurController::class, 'uconnexion'])->name('Utilisateur.seconnecter');
//faire la de connexion

// Route::post('/ajouteproduit',[CommandeController::class,'ajoutepanier'])->name('ajoutepanier');
// routes/web.php

Route::get('/panier/ajouter', [CommandeController::class, 'showAjouterForm'])->name('panier.ajouter.form');
Route::post('/panier/ajouter', [CommandeController::class, 'ajouter'])->name('panier.ajouter');

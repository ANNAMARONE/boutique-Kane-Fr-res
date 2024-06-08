<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\User;

class ProduitController extends Controller
{
    //
    public function produit(){
        $categorie=Categorie::all();
        $user = auth()->user();
        return view('produits.produit',compact('categorie','user'));
    }
    public function ajouteproduit(request $request){
        Produit::create($request->all());
        $user = auth()->user();
        return view('produits.index');
    }
    public function affichagerproduits(){
        $produits=Produit::all();
        return view('produits.index',compact('produits'));
    }
    
}

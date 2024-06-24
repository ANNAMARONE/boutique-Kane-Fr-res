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
        return redirect('/admin');
    }
    public function affichagerproduits(){
        $produits = Produit::take(6)->get();
        $categories=Categorie::all();
        
        return view('produits.index',compact('produits','categories'));
    }
    public function affichagerproduits2(){
        $produits=Produit::take(6)->get();
        $categories=Categorie::all();
        return view('produits.index2',compact('produits','categories'));
    }
    public function afficherdetail($id){
        $produits=Produit::find($id);
        $categories=Categorie::all();
        $categorie=Categorie::find($id);
        return view('produits.detail',compact('produits','categories','categorie'));
    }
    public function categorieProduits($categorie_id)
    {
        $categories = Categorie::all();
        $produits = Produit::where('categorie_id', $categorie_id)->get();
        return view('produits.index', compact('produits', 'categories'));
    }
    public function categorieProduits2($categorie_id)
    {
        $categories = Categorie::all();
        $produits = Produit::where('categorie_id', $categorie_id)->get();
        return view('produits.index2', compact('produits', 'categories'));
    }
    
    
}

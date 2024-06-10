<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Commande;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function valide(){
        
        return view('commandes.valide');
    }
    public function affichercommande($id){
        $produits=Produit::find($id);
        $utilisateur=Utilisateur::find($id);
        return view('commandes.valide',compact('produits','utilisateur'));
    }
    public function afficherutilisateur($id){
        $utilisateur=Utilisateur::find($id);
        return view('commandes.valide',compact('utilisateur'));
    }
    //
public function validecommande(Request $request){
    Commande::create($request->all());
    return redirect('/')->with('success', 'Product deleted successfully.');
}

}
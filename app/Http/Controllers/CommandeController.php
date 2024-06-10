<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Commande;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    public function valide($id){
        $user = Auth::user();
        $produits=Produit::find($id);
        return view('commandes.valide',compact('produits','user'));
    }
    public function affichercommande($id){
        $user = Auth::user();
        $produits=Produit::find($id);
        return view('commandes.valide',compact('produits','user'));
    }
    public function afficherutilisateur($id){
        
        return view('commandes.valide',compact('utilisateur'));
    }
    //
  
    public function validecommande(Request $request)
    {
       
    try{
        // Créer la commande
        $commande = Commande::create($request->except('produits'));
    
        // Associer les produits à la commande
        $commande->produits()->attach($request->produits);
    
        return redirect('/')->with('success', 'Commande validée avec succès.');
    }
   catch(\Exception $e) {
        // Gérer les erreurs
        return redirect()->back()->with('error', 'Une erreur est survenue lors de la validation de la commande.');
    
    }
}
}
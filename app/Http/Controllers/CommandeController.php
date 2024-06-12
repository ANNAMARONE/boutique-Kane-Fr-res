<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Commande;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
 
public function showAjouterForm()
    {
        $produits = Produit::all();
        return view('ajouter_au_panier', compact('produits'));
    }

    public function ajouter(Request $request)
    {
        $request->validate([
            'produit_id' => 'required|exists:produits,id',
            'quantite' => 'required|integer|min:1'
        ]);

        $produitId = $request->input('produit_id');
        $quantite = $request->input('quantite');

        \DB::beginTransaction();

        try {
            $commande = Commande::firstOrCreate(
                ['user_id' => $request->user()->id, 'etat_commande' => 'en cours'],
                ['reference' => 'REF-' . strtoupper(uniqid()), 'montant_total' => 0]
            );

            if (!$commande) {
                throw new \Exception('Failed to create or retrieve the order.');
            }
            $produit = Produit::find($produitId);
            if (!$produit) {
                throw new \Exception('Product not found.');
            }
            $montantTotal = $commande->montant_total + ($produit->prix_unitaire * $quantite);
            $commande->update(['montant_total' => $montantTotal]);
            $commande->produits()->attach($produitId, ['quantite' => $quantite]);

            \DB::commit();

            return redirect()->back()->with('success', 'Produit ajouté au panier avec succès.');
        } catch (\Exception $e) {
            \DB::rollBack();

            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ajout du produit au panier: ' . $e->getMessage());
        }
    }
    public function afficherCommande()
    {
       $user_id=Auth::id();
       $commandes=Commande::where('user_id',$user_id)->get();

       
            return view('commandes.afficher', compact('commandes'));
     
        
    }
   public function erreur(){
    return view('commandes.erreur');
   }
}




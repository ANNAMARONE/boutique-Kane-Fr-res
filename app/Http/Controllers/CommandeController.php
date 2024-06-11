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
  
public function ajoutepanier(Request $request){
    // $commande=Commande::create($request->all());
    // $commande->produits()->attach($request->produits);
    // return redirect('/')->with('success', 'Product deleted successfully.');

}
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
            // Crée une nouvelle commande ou récupère une commande existante
            $commande = Commande::firstOrCreate(
                ['user_id' => $request->user()->id, 'etat_commande' => 'en cours'],
                ['reference' => 'REF-' . strtoupper(uniqid()), 'montant_total' => 0]
            );

            // Vérifier si la commande a été créée ou récupérée correctement
            if (!$commande) {
                throw new \Exception('Failed to create or retrieve the order.');
            }

            // Récupérer le produit
            $produit = Produit::find($produitId);

            // Vérifier si le produit a été trouvé
            if (!$produit) {
                throw new \Exception('Product not found.');
            }

            // Mettre à jour le montant total de la commande
            $montantTotal = $commande->montant_total + ($produit->prix_unitaire * $quantite);
            $commande->update(['montant_total' => $montantTotal]);

            // Ajouter le produit à la commande via la table pivot
            $commande->produits()->attach($produitId, ['quantite' => $quantite]);

            \DB::commit();

            return redirect()->back()->with('success', 'Produit ajouté au panier avec succès.');
        } catch (\Exception $e) {
            \DB::rollBack();

            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ajout du produit au panier: ' . $e->getMessage());
        }
    }
}




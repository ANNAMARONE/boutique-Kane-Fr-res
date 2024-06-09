<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function compte(){
      return  view('authentifications.compte');
    }
    public function CreationCompt(request $request){
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ],
         [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
         ]);
      
        $user=new User();
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return view('authentifications.connexion')->with('success','compte créer avec sucess');
    }
    public function connexion(){
        return  view('authentifications.connexion');
    }
    public function seconnecter(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ],[
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse valide.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]
    );
        $credentials=[
            'email' => $request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($credentials)){
           return view('produits.produit')->with('success','Connexion');

        }else{
            return back()->with('error','Email ou mots de passe incorrect');
        }


    }
    public function deconnexion(){
        Auth::logout();
        return redirect('/connexion');
    }

    public function dasbord(){
        $produits=Produit::all();
        return view('admins.admin',compact('produits'));
        
    }
    public function supprimerP($id){
    $produit = Produit::findOrFail($id);
    $produit->delete();
    return redirect()->back()->with('success', 'Product deleted successfully.');

    }
    public function edit($id)
{
    $produit = Produit::findOrFail($id);
    return view('products.edit', compact('produit'));
}

public function update(Request $request, $id)
{
    $produit = Produit::findOrFail($id);
    $produit->update($request->all());
    return redirect('products')->with('success', 'Product updated successfully.');
}
 
}
  
    


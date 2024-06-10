<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    public function formulaire(){
        return view('commandes.contact');
    }
      public function ajouteInfo(request $request){
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ],
         [
            'prenom.required' => 'Le prénom est obligatoire.',
            'nom.required' => 'Le nom est obligatoire.',
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
        return redirect('/utilisconnexion')->with('success','compte créer avec sucess');
    }
    public function useconnecter(){
        return view('commandes.connexion');
    }
    public function uconnexion(Request $request){
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

            $request->session()->regenerate();
            
            return redirect('/commande');

        //    return redirect()->intended(route('/'))->with('success','Connexion');

        }else{
          
             return back()->with('error','Email ou mots de passe incorrect');
        }

    }
    public function deconnexion(){
        Auth::logout();
        return redirect('connexion');
    }
    //
  
}

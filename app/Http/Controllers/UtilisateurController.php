<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //
    public function formulaire(){
        return view('commandes.contact');
    }
    public function ajouteInfo(Request $request){
        Utilisateur::create($request->all());
        return redirect('/commande')->with('success');
    }
}

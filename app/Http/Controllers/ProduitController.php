<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    public function ajouteproduit(){
        return view('produits.produit');
    }
}

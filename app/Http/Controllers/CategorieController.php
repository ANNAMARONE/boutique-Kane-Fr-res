<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function ajoutecategorie(){
      
        return view('categories.categorie');
    }
    public function categorie(request $request){
        Categorie::create($request->all());
       return redirect()->back();
    }
     public function AffichageCategorie(){
        $categories=Categorie::all();
        return view('categories.categorie',compact('categories'));
        
     }
}

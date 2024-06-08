<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function ajoutecategorie(){
        $categories=Categorie::all();
        return view('categories.categorie',compact('categories'));
    }
    public function categorie(request $request){
        $categorie=Categorie::create($request->all());
       return redirect()->back();
    }
   public function editcategorie($id){
    $categorie=Categorie::find($id);
    return view('categories.modifier',compact('categorie'));
   }
    public function modifier(request $request,$id){
        $categorie = Categorie::find($id);
        if ($categorie) {

            $categorie->update($request->all());
            
            return redirect()->route('categories.categorie')->with('success', 'Catégorie mise à jour avec succès');
        } else {
            return redirect()->route('categories.categorie')->with('error', 'Catégorie non trouvée');
        }
        
    }
    public function suppresion($id){
        $categorie=Categorie::find($id);
        $categorie->delete();
        return redirect()->back()->with('success', 'Catégorie mise à jour avec succès');
    }
}

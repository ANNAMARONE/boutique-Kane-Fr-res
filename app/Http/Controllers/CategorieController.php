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
    $categorie=Categorie::findOrFail($id);
    return view('categories.modifier',compact('categorie'));
   }
    public function modifier(request $request,$id){
        $categorie = Categorie::findOrFail($id);
        $categorie->update($request->all());
        return redirect('/categorie')->with('success', 'Product updated successfully.');
        
    }

   
    public function suppresion($id){
        $categorie=Categorie::find($id);
        $categorie->delete();
        return redirect()->back()->with('success', 'Catégorie mise à jour avec succès');
    }
}

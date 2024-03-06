<?php

namespace App\Http\Controllers;
use App\Models\Produits; 
use App\Models\Commentaire; 



use Illuminate\Http\Request;

class index extends Controller
{
    public function index( )
    {
        $produits=Produits::all();
        return view('index',['produits' => $produits]);

    }
    public function store(Request $request)
{
    $name=$request->name;
    $description=$request->description;
    $price=$request->price;

        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required|numeric',
        ]);
    
        Produits::create([
            'name' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
        ]);
        return redirect()->route('ADD')->with('success', 'Produit ajouté avec succès.');


}
public function show($id)
{
    $produit = Produits::findOrFail($id);
    $commentaires = $produit->commentaires;
    return view('show', compact('produit', 'commentaires'));


}

    
    
}

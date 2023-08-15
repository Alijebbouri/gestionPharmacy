<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::paginate(5);
        return view('admin.produits.index', compact("produits"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_produit'=>'required',
            'dosage'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg|max:2048',
            'date_peremption'=>'required|date',
            'prix_unitaire'=>'required|numeric',
            'quantite_en_stock'=>'required|numeric',
        ]);
        $produit = new Produit();
        $produit->nom_produit = $request->nom_produit;
        $produit->dosage = $request->dosage;
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('images', 'public');
            // $produit->image = $imagePath;
            $file = $request->file('image');
            $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images'), $imageName);
            $produit->image = $imageName;
        }
        $produit->Date_Peremption = $request->date_peremption;
        $produit->prix_unitaire = $request->prix_unitaire;
        $produit->quantite_en_stock = $request->quantite_en_stock;
        $produit->save();
        return redirect()->route('produits.index')->with([
            'success' => "Le produit a été bien ajouter"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produit = Produit::find($id);
        return view('admin.produits.show',['produit'=>$produit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('admin.produits.edit',['produit'=>$produit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nom_produit' => 'required',
            'dosage' => 'required',
            'date_peremption' => 'required|date',
            'prix_unitaire' => 'required|numeric',
            'quantite_en_stock' => 'required|numeric',
        ]);
        $produit = Produit::findOrFail($id);
        $produit->nom_produit = $request->input('nom_produit');
        $produit->dosage = $request->input('dosage');
        $produit->date_peremption = $request->input('date_peremption');
        $produit->prix_unitaire = $request->input('prix_unitaire');
        $produit->quantite_en_stock = $request->input('quantite_en_stock');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images'), $imageName);
            $produit->image = $imageName;
        }
        $produit->save();
        return redirect()->route('produits.index')->with([
            'success' => "Le produit a été mis à jour avec succès"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->route('produits.index')->with([
            'success' => "Le produit a été bien supprimer"
        ]);
    }
}

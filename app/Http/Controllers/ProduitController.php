<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view ('admin.produit.list')->with('produits', $produits);
    }
    public function show($id)
    {
        $produits = Produit::find($id);
        return view('admin.produit.show')->with('produits', $produits);
    }
    public function create()
    {
        return view('admin.produit.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Produit::create($input);
        return redirect('produit')->with('flash_message', 'Produit ajouté !');
    }
    public function edit($id)
    {
        $produits = Produit::find($id);
        return view('admin.produit.edit')->with('produits', $produits);
    }
    public function update(Request $request, $id)
    {
        $produits = Produit::find($id);
        $input = $request->all();
        $produits->update($input);
        return redirect('produit')->with('flash_message', 'Produit modifié !');
    }
    public function destroy($id)
    {
        Produit::destroy($id);
        return redirect('produit')->with('flash_message', 'Produit supprimé !');
    }
}

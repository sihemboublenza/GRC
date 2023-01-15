<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index()
    {
        if (AuthenticateController::isAdmin())
        {
            $produits = Produit::all();
            return view ('admin.produit.list')->with('produits', $produits);
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function show($id)
    {
        if (AuthenticateController::isAdmin())
        {
            $produits = Produit::find($id);
            return view('admin.produit.show')->with('produits', $produits);
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function create()
    {
        if (AuthenticateController::isAdmin())
        {
            return view('admin.produit.create');
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function store(Request $request)
    {
        if (AuthenticateController::isAdmin())
        {
            $input = $request->all();
            Produit::create($input);
            return redirect('produit')->with('flash_message', 'Produit ajouté !');
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function edit($id)
    {
        if (AuthenticateController::isAdmin())
        {
            $produits = Produit::find($id);
            return view('admin.produit.edit')->with('produits', $produits);
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function update(Request $request, $id)
    {
        if (AuthenticateController::isAdmin())
        {
            $produits = Produit::find($id);
            $input = $request->all();
            $produits->update($input);
            return redirect('produit')->with('flash_message', 'Produit modifié !');
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function destroy($id)
    {
        if (AuthenticateController::isAdmin())
        {
            Produit::destroy($id);
            return redirect('produit')->with('flash_message', 'Produit supprimé !');
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Opp_prod;
use Illuminate\Http\Request;
use App\Models\Opportunite;
use App\Models\Client;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;

class Opp_prodController extends Controller
{
    public function index()
    {
        
    }
    public function show($id)
    {
        
    }
    public function create($id)
    {
        $opp = Opportunite::find($id);
        $list = Produit::all();
        return view('admin.opportunite.produits.create', ['opp' => $opp], ['list' => $list]);
    }
    public function store(Request $request)
    {
        $input['produit'] = $request['produit'];
        $input['opportunite'] = $request['opportunite'];
        $input['qte'] = $request['quantite'];
        Opp_prod::create($input);
        $opp = DB::table('opp_prod')->latest('updated_at')->first();
        return redirect('/opportunite/'.$opp->opportunite.'/masterproduit/');
    }
    public function destroy($id)
    {
        Opp_prod::destroy($id);
        return redirect('opportunite')->with('flash_message', 'Opportunité supprimé !');
    }
}

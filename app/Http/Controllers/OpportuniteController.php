<?php

namespace App\Http\Controllers;

use App\Models\Opp_prod;
use Illuminate\Http\Request;
use App\Models\Opportunite;
use App\Models\Client;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;

class OpportuniteController extends Controller
{
    public function index()
    {
        $opportunites = Opportunite::all();
        return view ('admin.opportunite.list')->with('opportunites', $opportunites);
    }
    public function show($id)
    {
        $opportunites = Opportunite::find($id);
        return view('admin.opportunite.show')->with('opportunites', $opportunites);
    }
    public function create()
    {
        $client = Client::all();
        return view('admin.opportunite.create', ['client' => $client]);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Opportunite::create($input);
        return redirect('opportunite')->with('flash_message', 'Opportunité ajouté !');
    }
    public function edit($id)
    {
        $opportunites = Opportunite::find($id);
        $client = Client::all();
        return view('admin.opportunite.edit', ['opportunites'=> $opportunites, 'client' => $client]);
    }
    public function update(Request $request, $id)
    {
        $opportunites = Opportunite::find($id);
        $input = $request->all();
        $opportunites->update($input);
        return redirect('opportunite')->with('flash_message', 'Opportunité modifié !');
    }
    public function destroy($id)
    {
        Opportunite::destroy($id);
        return redirect('opportunite')->with('flash_message', 'Opportunité supprimé !');
    }
    public function masterproduit($id, Request $request)
    {
        $opp = Opportunite::find($id); 
        $list = DB::table('opportunite')
            ->join('opp_prod','opp_prod.opportunite','=','opportunite.id')
            ->where('opportunite.id', '=', $id)
            ->join('produit','produit.id','=','opp_prod.produit')
            ->get();
        return view ('admin.opportunite.masterproduit', ['list' => $list],['opp' => $opp]);
    }
}

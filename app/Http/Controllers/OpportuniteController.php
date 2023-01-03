<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opportunite;

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
        return view('admin.opportunite.create');
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
        return view('admin.opportunite.edit')->with('opportunites', $opportunites);
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
}

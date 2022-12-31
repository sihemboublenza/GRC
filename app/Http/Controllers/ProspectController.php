<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;

class ProspectController extends Controller
{
    public function index()
    {
        $prospects = Prospect::all();
        return view ('admin.prospect.list')->with('prospects', $prospects);
    }
    public function show($id)
    {
        $prospects = Prospect::find($id);
        return view('admin.prospect.show')->with('prospects', $prospects);
    }
    public function create()
    {
        return view('admin.prospect.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Prospect::create($input);
        return redirect('prospect')->with('flash_message', 'Prospect ajouté !');
    }
    public function edit($id)
    {
        $prospects = Prospect::find($id);
        return view('admin.prospect.edit')->with('prospects', $prospects);
    }
    public function update(Request $request, $id)
    {
        $prospects = Prospect::find($id);
        $input = $request->all();
        $prospects->update($input);
        return redirect('prospect')->with('flash_message', 'Prospect modifié !');
    }
    public function destroy($id)
    {
        Prospect::destroy($id);
        return redirect('prospect')->with('flash_message', 'Prospect supprimé !');
    }
}

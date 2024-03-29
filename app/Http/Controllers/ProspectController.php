<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Models\Client;
use App\Models\Contact;

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

    public function contacted(Request $request)
    {
        $request->validate([
            'email'=> 'required|email|unique:users',
            'nom'=> 'required',
            'prenom'=> 'required',
            'societe' => 'required',
            'fonction' => 'required',
            'tel' => 'required',
        ]);

        $data = $request->all();

        Prospect::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'societe' => $data['societe'],
            'fonction' => $data['fonction'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'statut' => 'Chaud',
            'source' => 'Web',
        ]);

        return redirect('login')->with('success', 'Thank you for your interest, you will hear from us soon');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Prospect::create($input);
        return redirect('prospect')->with('flash_message', 'Prospect ajouté !');
    }
    
     public function transforme($id){
        $prospect = Prospect::find($id);
        if (!($prospect->transformed)) {
            $client = new Client();
            $client->societe = $prospect->societe;
            $client->tel = $prospect->tel;
            $client->adresse = $prospect->adresse;
            $client->siteweb = $prospect->siteweb;
            $client->save();
            
            $contact = new Contact();
            $contact->nom = $prospect->nom;
            $contact->prenom = $prospect->prenom;
            $contact->fonction = $prospect->fonction;
            $contact->tel = $prospect->tel;
            $contact->email = $prospect->email;
            $contact->client = $client->id;
            $contact->save();

            $prospect->transformed = true;
            $prospect->save();
            session()->flash('succes', 'prespect transformer avec success');
            return redirect('prospect');
        }else {
            session()->flash('echec', 'prespect est deja transmit');
            return back();
        } 

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

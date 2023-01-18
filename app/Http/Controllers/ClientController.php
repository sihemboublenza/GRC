<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Opportunite;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view ('admin.client.list')->with('clients', $clients);
    }
    public function show($id)
    {
        $clients = Client::find($id);
        return view('admin.client.show')->with('clients', $clients);
    }
    public function create()
    {
        return view('admin.client.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Client::create($input);
        return redirect('client')->with('flash_message', 'Client ajouté !');
    }
    public function edit($id)
    {
        $clients = Client::find($id);
        return view('admin.client.edit')->with('clients', $clients);
    }
    public function update(Request $request, $id)
    {
        $clients = Client::find($id);
        $input = $request->all();
        $clients->update($input);
        return redirect('client')->with('flash_message', 'Client modifié !');
    }
    public function destroy($id)
    {
        Client::destroy($id);
        return redirect('client')->with('flash_message', 'Client supprimé !');
    }
    public function mastercontact($id,Request $request)
    {
        if(Client::where('id',$id)->exists())
        {
            $client = Client::where("client.id","=",$id)->first();
            $contact= Contact::where('client',"=",$client->id)->get();
            return view('admin.client.mastercontact', ['contact' => $contact,'client'=>$client ]);
        }
        else return redirect()->back();
    }
    public function masteropportunite($id,Request $request)
    {
        if(Client::where('id',$id)->exists())
        {
            $client = Client::where("client.id","=",$id)->first();
            $opp= Opportunite::where('client',"=",$client->id)->get();
            return view('admin.client.masteropportunite', ['opp' => $opp,'client'=>$client ]);
        }
        else return redirect()->back();
    }
}

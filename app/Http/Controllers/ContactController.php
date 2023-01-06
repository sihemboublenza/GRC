<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;




class ContactController extends Controller
{
    public function index()
    {
      
        $client = Client::all(); 
        $contacts = Contact::join('client','client.id','=','contact.client')
            ->get();   
        return view ('admin.contact.list', ['contacts' => $contacts],['client' => $client]);
    }
    public function show($id)
    {
        $contacts = Contact::find($id);
        return view('admin.contact.show')->with('contacts', $contacts);
    }
    public function create()
    {  
        /*$client = Contact::join('client','client.id','=','contact.client')
                  ->get();*/
        $client = Client::all();
        return view('admin.contact.create',['client' => $client]);
    }
    public function store(Request $request)
    {
        $data = $request->all();

        Contact::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'fonction' => $data['fonction'],
            'tel' => $data['tel'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'client' => $data['client'],
        ]);
        return redirect('contact')->with('flash_message', 'Contact ajouté !');
    }
    public function edit($id)
    {
        $contacts = Contact::find($id);
        return view('admin.contact.edit')->with('contacts', $contacts);
    }
    public function update(Request $request, $id)
    {
        $contacts = Contact::find($id);
        $input = $request->all();
        $contacts->update($input);
        return redirect('contact')->with('flash_message', 'Contact modifié !');
    }
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact supprimé !');
    }
}

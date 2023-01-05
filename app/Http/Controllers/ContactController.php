<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Client;




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
      /*  $input = $request->all();
        Contact::create($input);*/


  $contact = new Contact();
  $contact->nom = $request->input('nom');
  $contact->prenom = $request->input('prenom');
  $contact->fonction = $request->input('fonction');
  $contact->tel = $request->input('tel');
  $contact->email = $request->input('email');
  $contact->password = bcrypt($request->input('password'));
  $contact->client = $request->input('client');

  $contact->save();
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

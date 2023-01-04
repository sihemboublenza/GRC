<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;



class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); 
        $client = Contact::join('client','client.id','=','contact.client')
            ->get();       
        return view ('admin.contact.list',compact('client'))->with('contacts', $contacts);
    }
    public function show($id)
    {
        $contacts = Contact::find($id);
        return view('admin.contact.show')->with('contacts', $contacts);
    }
    public function create()
    {
        $client = Contact::join('client','client.id','=','contact.client')
                  ->get();
        return view('admin.contact.create',compact('client'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
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

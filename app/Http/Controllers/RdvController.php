<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rdv;
use App\Models\Contact;
use App\Http\Controllers\AuthenticateController;

class RdvController extends Controller
{
    public function index()
    {
        $rdvs = Rdv::all();
        return view ('admin.rdv.list')->with('rdvs', $rdvs);
    }
    public function show($id)
    {
        $rdvs = Rdv::find($id);
        return view('admin.rdv.show')->with('rdvs', $rdvs);
    }
    public function create()
    {   
        $contact=Contact::all();
        return view('admin.rdv.create')->with('rdv', $contact);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $data = AuthenticateController::authentified_user_data();
        $input['commercial'] = $data['id'];
        Rdv::create($input);
        return redirect('rdv')->with('flash_message', 'Rendez-vous ajouté !');
    }
    public function edit($id)
    {
        $rdvs = Rdv::find($id);
        return view('admin.rdv.edit')->with('rdvs', $rdvs);
    }
    public function update(Request $request, $id)
    {
        $rdvs = Rdv::find($id);
        $input = $request->all();
        $rdvs->update($input);
        return redirect('rdv')->with('flash_message', 'Rendez-vous modifié !');
    }
    public function destroy($id)
    {
        Rdv::destroy($id);
        return redirect('rdv')->with('flash_message', 'Rendez-vous supprimé !');
    }
}

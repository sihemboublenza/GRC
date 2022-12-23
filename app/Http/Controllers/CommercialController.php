<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use mysql_xdevapi\Exception;
use App\Models\client;

class CommercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prospect()
    {
        $prospects = DB::select('select * from prospects');
        return view('admin.prospect',['prospects'=>$prospects]);
    }

    public function client()
    {
        $clients = DB::select('select * from clients');
        return view('admin.client',['clients'=>$clients]);
    }

    public function opportunite()
    {
        $opportunites = DB::select('select * from opportunites');
        return view('admin.opportunité',['opportunites'=>$opportunites]);
    }

    public function editClient(Request $request, $id)
    {
        $client = Client::where('id', '=', $id)->first();

        $request->validate([
            'societe_client' => 'required',
            'tel_client' => 'required',
            'adresse_client' => 'required',
            'siteweb_client' => 'required'
        ]);

        $client->societe_client = $request->get('societe_client');
        $client->tel_client = $request->get('tel_client');
        $client->adresse_client = $request->get('adresse_client');
        $client->siteweb_client = $request->get('siteweb_client');

        $client->save();

        flashy()->success('Client ajouté avec succès');
        return redirect()->route('admin.client');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

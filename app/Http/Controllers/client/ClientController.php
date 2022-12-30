<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Stock;
 
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Grc = contact::all();
 
        return view('client.profile', compact('Grc')); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }
 
    /**
     * Display the specified resource. We don't need this one for this tutorial.
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
        $Grc		= contact::find($id_client);
        return view('client.profile', compact('Grc'));  // -> resources/views/stocks/edit.blade.php
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
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'nom_c'=>'required',
            'email_c'=>'required',
            'tel_c'=>'required',
        ]); 
        $Grc = contact::find($id_client);
        // Getting values from the blade template form
        $Grc->nom_c =  $request->get('nom_c');
        $Grc->email_c =  $request->get('email_c');
        $Grc->tel_c =  $request->get('tel_c');
        $Grc->save();
 
        return redirect('/client')->with('success', 'client updated.'); // -> resources/views/stocks/index.blade.php
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    } 
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Client;
use App\Models\Opportunite;
use App\Models\Produit;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;



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





    public function editProfile($id)
    {   //$m = Contact::find($id);
        $m =DB::table('Contact')
           ->where('contact.id','=',Auth::guard('front')->id())
           ->find($id);
      //$m=is_bool($c);
        //dd($m)
        return view('contacts.editprofile',['m'=>$m]);
    }
     public function updateProfile(Request $request, $id)
    {    $m = DB::table('contact')
                   ->where('contact.id','=',Auth::guard('front')->id())
                   ->get();
          
        $contact = Contact::find($id);
        $contact->nom = $request->input('nom');
        $contact->prenom = $request->input('prenom');
        $contact->fonction = $request->input('fonction');
        $contact->tel = $request->input('tel');
        $contact->email = $request->input('email');
        $contact->password = Hash::make($request->input('password'));
        $contact->save();
        //dd($contact);
        return view('/contacts/profile',['m' => $m]);
    }

   public function updateProfilephoto(Request $request, $id)
    {   $m = DB::table('contact')
                   ->where('contact.id','=',Auth::guard('front')->id())
                   ->get();
        if($request->hasFile('photo')){
        $avatar=$request->file('photo');
        $filename=time() . '.' . $avatar->getClientOriginalExtension();
        Image::Make($avatar)->resize(300,300)->save(public_path('/telechargement/'. $filename));
        $ser=Contact::find($id);
        $ser->photo=$filename;
        $ser->save();

          }
        
        //dd($contact);
        return view('/contacts/profile',['m' => $m]);
    }
    public function viewContacts(){ 

         $currentCon = DB::table('contact')
          ->where('contact.id','=',Auth::guard('front')->id())
          ->get();
         foreach ($currentCon as $c){
                $contacts =DB::table('contact')
                ->where('contact.id','!=',$c->id)
                ->where('contact.client','=',$c->client)
                ->get();}

             //pour afficher les informations du client
                $client=Contact::join('client','client.id','=','contact.client')
                ->where('contact.id','=',Auth::guard('front')->id())
                ->get();

    return view('/contacts/contacts',['contacts'=>$contacts],['client'=>$client]);
    }

    public function viewOpportunites(){ 

       

            //pour afficher les informations du client
               $client=Contact::join('client','client.id','=','contact.client')
               ->where('contact.id','=',Auth::guard('front')->id())
               ->get();
              /* $opportunite = Client :: join('client','client.id','=','opportunite.client')
               ->join ('contact','contact.client','=','client.id')
               ->where('contact.id','=',Auth::guard('front')->id())
               ->get();*/


               $opportunite = Opportunite :: join('client','client.id','=','opportunite.client')
               ->join ('contact','contact.client','=','client.id')
               ->where('contact.id','=',Auth::guard('front')->id())
               ->get();
              /* $opportunite=DB :: table('opportunite')
               ->where ('opportunite.client','=',$client->id)
               ->get();*/

   return view('/contacts/opportunites',['opportunite'=>$opportunite],['client'=>$client]);
   }

   public function viewFacture($nom_opp){ 

       
    if(Opportunite::where('nom_opp',$nom_opp)->exists()){
        $op = Opportunite::where('nom_opp',$nom_opp)
        ->first();

    }
    

       $produit = Produit :: join('opp_prod','opp_prod.produit','=','produit.id')
       ->where('opp_prod.opportunite','=',$op->id)
       ->get();
       
      

return view('/contacts/facture',['produit'=>$produit]);
}


  public static function authentified_contact_data(){ 
   
    $currentCon = DB::table('contact')
    ->where('contact.id','=',Auth::guard('front')->id())
    ->first();
    // ->toArray()
    foreach ($currentCon as $c){ 
    // $photo = $currentCon->photo;
     $nom = $currentCon->nom;
      $prenom = $currentCon->prenom;}
       return compact('currentCon');
        }

  public function profile(){ 
       $m = DB::table('contact')
                   ->where('contact.id','=',Auth::guard('front')->id())
                   ->get();
       //$m =request()->get('m');
       return view('/contacts/profile',['m' => $m]);
        }
}

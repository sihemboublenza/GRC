<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
       protected $fillable =[
	 'id_produit',
	 'nom' ,
	 'description',
	 'photo',
	 'prix',
	 'quantite',
	 ];
	 	 
}
 function profile()
 {
	 return $this->hasone(Profile::class,'id_client');
 }
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
       protected $fillable =[
	 'societe_client' ,
	 'tel_client',
	 'adresse_client',
	 'siteweb_client',
	 ];
	 	 
}
 function profile()
 {
	 return $this->hasone(Profile::class,'id_client');
 }
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
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
 public function profile()
 {
	 return $this->hasone(profile:class,'id_client');
 }
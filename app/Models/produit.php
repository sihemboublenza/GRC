<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
     protected $fillable =[
	 'id_produit',
	 'nom_p',
	 'description',
	 'photo',
	 'prix',
	 'quantite',
	 ];
	 
}

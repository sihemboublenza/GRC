<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prospect extends Model
{
     protected $fillable =[
	 'id_prospect',
	 'nom_pro',
	 'prenom_pro',
	 'societe',
	 'fonction',
	 'email',
	 'tel',
	 'adresse',
	 ];
	 
}

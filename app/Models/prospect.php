<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
     protected $fillable =[
	 'id_p',
	 'nom_p',
	 'prenom_p',
	 'societe_p',
	 'fonction_p',
	 'email_p',
	 'tel_p',
	 'adresse_p',
	 'statut',
	 'source',
	 ];
	 
}

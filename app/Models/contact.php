<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
	 protected $fillable =[
  'id_contact',
   'nom',
   'prenom',
   'fonction',
   'email',
   'tel_contact',
    'password',
	];
	
}

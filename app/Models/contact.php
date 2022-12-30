<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contact extends Authenticatable
{
	 protected $fillable =[
    'nom',
    'prenom',
    'email',
    'password',
    'tel',
    'fonction',    
    'source',
	];
	
}

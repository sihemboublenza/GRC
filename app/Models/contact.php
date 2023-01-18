<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contact extends Authenticatable
{
    use HasFactory;
	protected $table = 'contact';
	protected $primarykey = 'id';
    protected $fillable =[
	 'nom',
	 'prenom',
	 'fonction',
	 'tel',
	 'email',
	 'password',
	 'client',
	];
	
}

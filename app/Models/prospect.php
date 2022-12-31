<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
	use HasFactory;
	protected $table = 'prospect';
	protected $primarykey = 'id';
    protected $fillable =[
	 'nom',
	 'prenom',
	 'societe',
	 'fonction',
	 'email',
	 'tel',
	 'adresse',
	 'siteweb',
	 'statut',
	 'source',
	];
}
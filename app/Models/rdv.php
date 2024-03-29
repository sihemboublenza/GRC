<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RDV extends Model
{
	use HasFactory;
	protected $table = 'rdv';
	protected $primarykey = 'id';
    protected $fillable =[
		'date',
	 	'heure',
	 	'compte_rendu',
		'contact',
		'commercial',
	  ];
}

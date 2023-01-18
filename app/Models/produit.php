<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
	use HasFactory;
	 protected $table = 'produit';
	 protected $primarykey = 'id';
     protected $fillable =[
	 'nom',
	 'description',
	 'photo',	
	 'prix',
	 'quantite',
	 ];	 
}
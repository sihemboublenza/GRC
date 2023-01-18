<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opp_prod extends Model
{
  use HasFactory;
	 protected $table = 'opp_prod';
	 protected $primarykey = 'id';
  protected $fillable =[
  'opportunite',
  'produit',
  'qte',
  ];
  }
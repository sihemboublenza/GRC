<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunite extends Model
{
  use HasFactory;
	 protected $table = 'opportunite';
	 protected $primarykey = 'id';
  protected $fillable =[
  'nom_opp',
  'montant',
  'etape',
  'date_de_cloture',
  'client',
  ];
  }
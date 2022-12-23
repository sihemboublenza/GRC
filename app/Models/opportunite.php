<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunite extends Model
{
  protected $fillable =[
  'id_opp',
  'nom',
  'montant',
  'etape',
  'date_de_cloture',
  'n_facture',
  ];
  }
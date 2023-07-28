<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrepot extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'adresse',
        'capacite_max',
        'type',
    ];
}

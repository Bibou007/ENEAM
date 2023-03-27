<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pv extends Model
{
    use HasFactory;
    protected $fillable=[
        'filiere',
        'annee',
        'mode_cours',
        'pv_path',
    ];
}

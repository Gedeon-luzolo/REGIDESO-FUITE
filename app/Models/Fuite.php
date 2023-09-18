<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controllers\Homecontrollers;
use App\Controllers\Ajoutfuite;

class Fuite extends Model
{
    use HasFactory;
    protected $fillable = [ 'Nom','Adresse','Date','Description','Photo'];
}

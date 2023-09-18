<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 

    public function Envoie()
    {
        return view('Envoie');
    }

    public function Robinet()
    {
        return view('Robinet');
    }

/* 
    public function __construct()
    {
        $this->middleware('auth');
    } */


    public function index()
    {
        return view('Accueil');
    }
    
    public function Envoindex()
    {
        return view('Envoindex');
    }
}

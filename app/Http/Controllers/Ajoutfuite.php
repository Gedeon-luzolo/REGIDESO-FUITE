<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuite;

class Ajoutfuite extends Controller
{

            public function affichage()
            {
              $Fuite=Fuite::all();
              return view('admin.Panneau')->with('Fuite',$Fuite);
      
            }

    public function store(Request $request)
    {
        $request->validate([
          'Nom'=>'required',
          'Adresse'=>'required',
          'Date'=>'required',
          'Description'=>'required',
          'Photo'=>'required|mimes:png,jpg,jpeg,gif|max:10000',
        ]);
 
        $Photoname = time() .'.'. $request-> Photo->extension();
        $request->Photo->move(public_path('Photo'), $Photoname);

        $index=New Fuite;
        $index->Nom=$request->Nom;
        $index->Adresse=$request->Adresse;
        $index->Date=$request->Date;
        $index->Description=$request->Description;
        $index->Photo=$Photoname;
    
        $index->save();
        return back()->withsuccess('Vos informations ont été envoyées!');   
    }


    
}

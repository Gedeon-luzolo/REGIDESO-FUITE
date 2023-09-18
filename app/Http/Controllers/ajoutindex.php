<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Index;


class ajoutindex extends Controller
{
  protected function messages()
  {
      return [
          'NumAbonne.required' => 'Le champ Numero dabonné est obligatoire.',
      ];
  }

    public function store1(Request $request)
    {
        $request->validate([
          'NumAbonne'=>'required',
          'Noms'=>'required',
          'Numindex'=>'required|numeric',
          'Adresse'=>'required',
          'Photo'=>'required|mimes:png,jpg,jpeg,gif|max:10000',
        ], $this->messages());
     
        $Photoname = time() .'.'. $request->Photo->extension();
        $request->Photo->move(public_path('Images'), $Photoname);

        $encryptedNumindex = encrypt($request->input('Numindex'));

        $index=New Index;
        $index->NumAbonne=$request->NumAbonne;
        $index->Noms=$request->Noms;
        $index->Numindex = $encryptedNumindex;
        $index->Adresse=$request->Adresse;
        $index->Photo=$Photoname;
        $index->save();
        return back()->withsuccess('Vos informations ont été envoyées!');
    }
}

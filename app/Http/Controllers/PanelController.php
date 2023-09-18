<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\index;
use Illuminate\Support\Facades\Hash;

class PanelController extends Controller
{


    public function Ajouter(Request $request)
    {
        $Users= New User;
        $Users->name=$request->name;
        $Users->email=$request->email;
        $Users->password=$request->password;
        $Users->usertype=$request->usertype;
        $Users->numAbonne=$request->num;
    
        $Users->save();
        return redirect('/Utilisateur')->withsuccess('Utilisateur ajoute!');
    }



    public function Utilisateurs()
    {
        $User=User::all();
        return view('admin.Utilisateur')->with('User',$User);
    }


    public function Listindex()
    {
        $index=index::all();
        // return view('admin.Listindex')->with('index',$index);
        $decryptedData = $index->map(function ($item) {
            return [
                'id' => $item->id,
                'NumAbonne' => $item->NumAbonne,
                'Noms' => $item->Noms,
                'Numindex' => decrypt($item->Numindex),
                'Adresse' => $item->Adresse,
                'Photo' => $item->Photo,
            ];
        });
        return view('admin.Listindex',compact('decryptedData'));
    }
   
    
    public function Modifier(Request $request, $id)
    {
        $User=User::findOrFail($id);
        return view('admin.Utilisateur-edit')->with('User',$User);
    }


    public function Update(Request $request, $id)
    {
        $User=User::find($id);
        $User->name  = $request->input('name');
        $User->email  = $request->input('email');
        $User->password=$request->input('password');
        $User->usertype  = $request->input('usertape1');
        $User->Update();

        return redirect('/Utilisateur')->withsuccess('Vos informations ont été modifiées!');
      
    }


    public function Delete($id)
    {
        $User=User::findOrFail($id);
        $User->delete();
        return redirect('/Utilisateur')->withsuccess('Vous venez de supprimer un utilisateur!');
    }
  
    
}


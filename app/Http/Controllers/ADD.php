<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ADD extends Controller
{
    public function ADD(Request $request )
    {
        
        $nom=$request ->nom;
        return view('Add',['nom'=>$nom]);

    }
}

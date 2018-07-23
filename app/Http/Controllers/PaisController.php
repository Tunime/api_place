<?php

namespace App\Http\Controllers;

use App\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    //
      //
      public function index(Request $request)
      {
        $paises = Pais::paginate(10);
        return view('pais',['paises'=>$paises]);
            //
      }
    
}

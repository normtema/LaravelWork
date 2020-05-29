<?php

namespace App\Http\Controllers;

use App\Some;
use App\Http\Controllers\Controller;

class SomeController extends Controller{

    public function getelem( $id, $name){
        $S = New Some($id, $name);
        return view('some', ['Obj'=>$S]);
    }
}

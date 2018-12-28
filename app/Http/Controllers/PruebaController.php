<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function mensaje(Request $request){
        return $request->all();
    }
    public function obMensaje(Request $request){
        return $request->all();
    }
}

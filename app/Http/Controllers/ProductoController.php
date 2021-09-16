<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //

    public function Nuevo_Producto(){

        return view('nuevoproducto');
    }
}
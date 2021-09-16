<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tc_movimientosController extends Controller
{
    //

    public function movimiento(){

        return view('MisTC.tc_movimientos');
    }
}
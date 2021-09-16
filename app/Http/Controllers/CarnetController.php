<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarnetController extends Controller
{
    //

    public function Carnet(){

        return view('Carnets');
    }
}
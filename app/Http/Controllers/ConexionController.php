<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConexionController extends Controller
{
    public function getAllpost()
    {
        $response = Http::get("localhost:8080/tc_tarjetas");
        return $response->springboot();
    }

    public function getPostById($id)
    {
        $response = Http::get("localhost:8080/tc_tarjetas".$id);
        return $response->springboot(); 
    }

    
}

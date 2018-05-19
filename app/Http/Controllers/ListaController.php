<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class ListaController extends Controller
{
    public function index(){

      
       $estudiantes = DB::table("estudiantes")
                      ->join("carreras","estudiantes.idestudiantes","=","carreras.idcarrera")
                      ->paginate(10);

       return view("lista",["estudiantes" => $estudiantes]);
    }
}

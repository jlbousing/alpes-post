<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index(){

      $arrayCarreras = DB::table("carreras")->get();
      return view("welcome");
    }

    public function registroEstudiante(Request $request){
      $nombre = $request->input("nombre");
      $apellido = $request->input("apellido");
      $correo1 = $request->input("correo1");
      $correo2 = $request->input("correo2");
      $carrera = $request->input("carrera");

      $idCarrera = DB::table("carreras")
                       ->where("nombre_carrera",$carrera)
                       ->value("idcarrera");

      DB::table("estudiantes")
           ->insert([
             "nombre" => $nombre,
             "apellido" => $apellido,
             "correo" => $correo1,
             "correo2" => $correo2,
             "fk_carrera" => $idCarrera
           ]);

      return view("welcome");


    }

    public function mail(Request $request){

      $body = $request->input("editor1");

      $estudiantes = DB::table("estudiantes")->get();

      foreach ($estudiantes as $item) {

        Mail::send("mail.mail",$request->all(),function($mensaje) use($item){
          $mensaje->from("jbousing@gmail.com","prueba de mensaje");
          $mensaje->to($item->correo)->subject("titulo de prueba");
        });

        if($item->correo2 != null){
          Mail::send("mail.mail",$request->all(),function($mensaje) use($item){
            $mensaje->from("jbousing@gmail.com","prueba de mensaje");
            $mensaje->to($item->correo2)->subject("titulo de prueba");
          });
        }
      }

      return view("welcome");
    }
}

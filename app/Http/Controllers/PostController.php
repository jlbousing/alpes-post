<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
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

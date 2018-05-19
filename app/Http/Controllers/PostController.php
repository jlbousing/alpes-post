<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function mail(Request $request){
      $body = $request->input("editor1");
    }
}

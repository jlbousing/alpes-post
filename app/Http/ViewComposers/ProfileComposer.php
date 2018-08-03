<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class ProfileComposer {

    public function compose(View $view)
    {
        $arrayCarreras = DB::table("carreras")->get();
        $view->with('arrayCarreras', $arrayCarreras);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function membre(){

        // if (auth()->guest()) {
        //     flash("vous devez etre membre et connecté pour acceder à cette page")->error();
        //     return redirect('/');
        // }

             return view('membre.membre');

    }

}

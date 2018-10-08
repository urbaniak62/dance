<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Request $request)
    {
        // if (auth()->guest()) {
        //     flash("vous devez etre membre et connecté pour acceder à cette page")->error();
        //     return redirect('/');
        // }
        $categories=categorie::find('$id');
        dd($categories);

        return view('membre/membre')->with('categories',$categories);

    }

}

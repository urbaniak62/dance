<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;

class CategoriesController extends Controller
{
    public function store(Request $request)
    {
        if (auth()->guest()) {
            flash("vous devez etre membre et connecté pour acceder à cette page")->error();
            return redirect('/');
        }
        $categories=Categories::all();
        $categories = request('categories');
        dd($categories);

        // return view('membre/membre')->with('categories',$categories);

    }

}

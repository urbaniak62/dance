<?php

namespace App\Http\Controllers;

use App\Dances;

use Illuminate\Http\Request;



class DancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        request()->validate([
            'groupes'=>['required'],
            'categories'=>['required'],
            // 'videos'=>['required|mimetypes:video/mp4,video/MOV,video/ogg,video/qt | max:200000000'],
            'videos'=>['required','image'],
            'points_clef'=>['required','max:255','min:10'],
        ]);

        $dances=Dances::create([
            'groupes'    => request('groupes'),
            'categories' => request('categories'),
           $path= 'videos' => request('videos')->store('videos','public'),
            'points_clef'=> request('points_clef'),

        ]);

        //  return ($path);
        //  return ('groupe : ') . request('groupes') .('<br> categorie : ') . request('categories') . ('<br> et ') . request('videos') . ('<br> points clef : ') . request('points_clef');

            flash('votre formulaire de dance a bien été enregistré')->success();
            return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->guest()) {
            flash("vous devez etre membre et connecté pour acceder à cette page")->error();
            return redirect('/');
        }
        $dances=Dances::all();


        return view ('membre.membre',[
            'dances'=> $dances
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dance  $dance
     * @return \Illuminate\Http\Response
     */
    public function show(Dance $dance)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dance  $dance
     * @return \Illuminate\Http\Response
     */
    public function edit(Dance $dance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dance  $dance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dance $dance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dance  $dance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dance $dance)
    {
        //
    }
    public function categorie(){
        $categories = request('categories');
        return($categories);
    }
}

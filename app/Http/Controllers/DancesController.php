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
             'videos'=>['required','mimes:mp4,MOV,ogg,qt'],
            // 'videos'=>['required','image'],
            'points_clef'=>['required','max:255','min:10'],
        ]);

        $dances=Dances::create([
            'groupes'    => request('groupes'),
            'categories' => request('categories'),
           $path= 'videos' => request('videos')->store('videos','public'),
            'points_clef'=> request('points_clef'),

        ]);

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
     * @param  \App\Dances  $dance
     * @return \Illuminate\Http\Response
     */
    public function show(Dances $dance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dances  $dance
     * @return \Illuminate\Http\Response
     */
    public function edit(Dances $dance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dances  $dance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dances $dance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dances  $dance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dances $dance)
    {
        //
    }
    // public function categorie(){
    //     $categories = request('categories');

    //     $dances= Dances::where('categories',$categories);
    //     dump($dances);
    //     return $categories;
    // }
}

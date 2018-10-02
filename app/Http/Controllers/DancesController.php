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
        $dances=Dances::create([
            'groupes'    => request('groupes'),
            'categories' => request('categories'),
            'videos'     => request('videos'),
            'points_clef'=> request('points_clef'),

        ]);

        return ('groupe : ') . request('groupes') .('<br> categorie : ') . request('categories') . ('<br> et ') . request('videos') . ('<br> points clef : ') . request('points_clef');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dance  $dance
     * @return \Illuminate\Http\Response
     */
    public function show(Dance $dance)
    {
        $dances=Dances::all();
        return view ('membre/membre',[
            'dances'=> $dances,
        ]);
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
}

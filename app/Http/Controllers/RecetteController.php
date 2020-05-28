<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recette;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recettes=Recette::all();

        return view('recette.index',compact('recettes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recette.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recette=new Recette();

        $recette->ingredient=request('ingredient');
        $recette->quantite=request('quantite');

        $recette->save();

        return redirect()->route('recette.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recette=Recette::find($id);

        return view('recette.edit',compact('recette'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recette=Recette::find($id);

        $recette->ingredient=request('ingredient');
        $recette->quantite=request('quantite');

        $recette->save();

        return redirect()->route('recette.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recette=Recette::find($id)->delete();

        return redirect()->back();
    }
}

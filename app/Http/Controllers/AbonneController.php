<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Abonne;
use Illuminate\Http\Request;


class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonne = Abonne::orderBy('created_at', 'Asc')->first();
        return view("enregistrement", compact("abonne"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $abonne=Abonne::all();
        return view('liste', compact('abonne'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abonne= new Abonne();
        $abonne->nom=$request->input('nom');
        $abonne->prenom=$request->input('prenom');
        $abonne->naissance=$request->input('naissance');
        $abonne->email=$request->input('email');
        $abonne->fin_abonnement=$request->input('fin_abonnement');
        $abonne->numero=$request->input('numero');
        $abonne->genre=$request->input('genre');
        $abonne->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function show(Abonne $abonne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abonne=Abonne::find($id);
        return view('edit', compact('abonne'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $abonne= Abonne::find($id);
        $abonne->nom=$request->input('nom');
        $abonne->prenom=$request->input('prenom');
        $abonne->naissance=$request->input('naissance');
        $abonne->email=$request->input('email');
        $abonne->fin_abonnement=$request->input('fin_abonnement');
        $abonne->numero=$request->input('numero');
        $abonne->genre=$request->input('genre');
        $abonne->save();
        $abonne->Abonne::All();
        return redirect('list')->with('success','Modification effectué avec succès!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abonne= Abonne::find($id);
        $abonne->delete();
        return redirect('list');
    }
}

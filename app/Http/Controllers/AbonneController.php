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
        $abonnes = Abonne::all();
        return view("liste", compact("abonnes"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('enregistrement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $abonnes= new Abonne();
        // $abonnes->nom=$request->input('nom');
        // $abonnes->prenom=$request->input('prenom');
        // $abonnes->naissance=$request->input('naissance');
        // $abonnes->email=$request->input('email');
        // $abonnes->fin_abonnement=$request->input('fin_abonnement');
        // $abonnes->numero=$request->input('numero');
        // $abonnes->genre=$request->input('genre');
        // $abonnes->save();
         request()->validate([
            'email' => 'required|email|unique:abonnes'
        ]);

        Abonne::create([
        "nom"=>$request->nom,
        "prenom"=>$request->prenom,
        "naissance"=>$request->naissance,
        "email"=>$request->email,
        "numero"=>$request->numero,
        "fin_abonnement"=>$request->fin_abonnement,
        "genre"=>$request->genre
        ]);
         return back()->with('message','Abonné ajouté avec succès!');

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
        $abonnes=Abonne::find($id);
        return view('direction', compact('abonnes'));

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
        
        $abonnes= Abonne::find($id);
       
        Abonne::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "naissance"=>$request->naissance,
            "email"=>$request->email,
            "numero"=>$request->numero,
            "fin_abonnement"=>$request->fin_abonnement,
            "genre"=>$request->genre
            ]);
            return redirect("{{route('abonne.index')}}")->with('success','Modification effectué avec succès!');

        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abonne  $abonnes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abonne= Abonne::find($id);
        $abonne->delete();
        return redirect("{{route('abonne.index')}}")->with('message','Suppression effectué avec succès');
    }
}

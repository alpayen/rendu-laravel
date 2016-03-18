<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class BapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //Only if Log In

        if(Auth::check()){

        return view('bap.index');
        }

        else{
            return view('auth.login');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //Validations


        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required|email',
            'tel' => 'required|digits_between:6,15',
            'nomduprojet' => 'required|string',
            'fonction' => 'required|string',
            'adresse' => 'required',
            'nom_suivi' => 'required',
            'email_suivi' => 'required|email',
            'tel_suivi' => 'required|digits_between:6,15',
            'fonction_suivi' => 'required|string',
            'adresse_suivi' => 'required',
            'contexte' => 'required',
            'demande' => 'required',
            'objectif' => 'required',
            'contrainte' => 'required'
        ],
            [
                'name.required' => 'Nom obligatoire',
                'email.required' => 'L\'email est obligatoire!',
                'email.email' => 'l\'email donné n\'est pas valide',
                'tel.required' => 'Telephone obligatoire!',
                'tel.digits_between:6,15' => 'Le numéro de tel doit faire entre 6 et 15 chiffre!',
                'nomduprojet.required' => 'Votre projet doit avoir un nom',
                'fonction.required' => 'Vous devez spécifier votre fonction',
                'adresse.required' => 'Votre adresse est obligatoire!',
                'nom_suivi.required' => 'Vous devez spécifier votre nom de suivi',
                'email_suivi.required' => 'L\'email de suivi est obligatoire!',
                'email_suivi.email' => 'l\'email de suivi donné n\'est pas valide',
                'tel_suivi.required' => 'Telephone de suivi obligatoire!',
                'tel_suivi.digits_between:6,15' => 'Le numéro de tel suivi doit faire entre 6 et 15 chiffre!',
                'fonction_suivi.required' => 'Vous devez spécifier votre fonction suivie',
                'adresse_suivi.required' => 'Votre adresse suivie est obligatoire!',
                'contexte.required' => 'Votre contexte est obligatoire!',
                'demande.required' => 'Votre demande est obligatoire!',
                'objectif.required' => 'Votre objectif est obligatoire!',
                'contrainte.required' => 'Votre contrainte est obligatoire!'


            ]);


        //BDD insertion


        $projet = new Projet;
        $projet->user_id = Auth::user()->id;
        $projet->nom  = $request->nom;
        $projet->email  = $request->email;
        $projet->tel  = $request->tel;
        $projet->nomduprojet  = $request->nomduprojet;
        $projet->fonction  = $request->fonction;
        $projet->adresse  = $request->adresse;
        $projet->nom_suivi  = $request->nom_suivi;
        $projet->fonction_suivi  = $request->fonction_suivi;
        $projet->adresse_suivi  = $request->adresse_suivi;
        $projet->email_suivi  = $request->email_suivi;
        $projet->tel_suivi  = $request->tel_suivi;
        $projet->contexte  = $request->contexte;
        $projet->demande  = $request->demande;
        $projet->objectif  = $request->objectif;
        $projet->contrainte  = $request->contrainte;
        $projet->validation  = 0;
        $projet->save();


        return redirect('home.index')->with('message', 'Votre Project nous a été envoyé, nous reviendrons à vous dans quelques instants pour vous faire par de sa validation');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

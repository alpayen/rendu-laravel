<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

use App\Http\Requests;

class BapAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $avalider = Projet::all()->where('validation', 0);
        $valide = Projet::all()->where('validation', 1);
        $rejete = Projet::all()->where('validation', 2);
        return view('admin.bap.index')->with(compact('avalider', 'valide', 'rejete'));
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
        //
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
        try{
            $projet = Projet::findOrFail($id);
            return view('admin.bap.show')->with(compact('projet'));
        }catch(\Exception $e) {
            return redirect()->route('admin.articles.index')->with(['erreur' => 'Oooooooppppsssssss !!']);
        }
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
        $projet = Projet::find($id);

        $projet->validation   = $request->validation;


        $projet->update();

        return redirect()->route('admin.bap.index');
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

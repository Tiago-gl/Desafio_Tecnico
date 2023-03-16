<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function index()
    {
        $candidato = Candidato::all();
        return view('candidatos.index', ['candidato' => $candidato]);
    }
    public function create(){
        //
        return view('candidatos.create');
        
    }
    public function store(Request $request)
    {
        //
        $candidato = new Candidato();
        $candidato->nome = $request->nome;
        $candidato->habilidades = $request->habilidades;
        $candidato->save();
        return redirect()->route('candidatos.index')->with('success', 'Candidato created successfully');
    }
    public function show(string $id){
        //
        $candidato = Candidato::find($id);
        return view('candidatos.show', ['candidato' => $candidato]);
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id){
        //
        $candidato = Candidato::find($id);
        $candidato->nome = $request->nome;
        $candidato->habilidades = $request->habilidades;
        $candidato->save();
        return redirect()->route('candidatos.index')->with('success', 'Candidato updated successfully');
        
    }
    public function destroy(string $id)
    {
        //
    }
}
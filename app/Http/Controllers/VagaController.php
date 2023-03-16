<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagasController extends Controller{

    public function index(){
        $vagas = Vaga::all();
        return view('vagas.index')->with('vagas', $vagas);
    }
    
    public function create()
    {
        //
    }

    public function store(Request $request){
        //
        $vaga = new Vaga();
        $vaga->nome_vaga = $request->titulo_vaga;
        $vaga->requisito = $request->requisitos;
        $vaga->save();
        return redirect()->route('vagas.index')->with('success', 'Vaga created successfully');
    }
    public function show(string $id){
        //
        $vaga = Vaga::find($id);
        return view('vagas.show', ['vaga' => $vaga]);
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id){
        //
        $vaga = Vaga::find($id);
        $vaga->nome_vaga = $request->titulo_vaga;
        $vaga->requisito = $request->requisitos;
        $vaga->save();
        return redirect()->route('vagas.index')->with('success', 'Vaga updated successfully');
    }
    public function destroy(string $id){
        $vaga = Vaga::find($id);
        $vaga->delete();
        return redirect()->route('vagas.index');
    }

    public function vagasDisponiveis(){
        $vagas = Vaga::with('candidatos')->get();
        return view('vagas_disponiveis', compact('vagas'));
    }

}
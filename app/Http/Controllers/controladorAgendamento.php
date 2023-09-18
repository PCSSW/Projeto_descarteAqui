<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Civil;
use App\Models\Catador;
use App\Models\material;
use Illuminate\Support\Facades\DB;

class controladorAgendamento extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $agendamentos = Agendamento::all();
        return view('site.agendamento', compact('agendamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.agendamento');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Agendamento();
        $dados->horario = $request->input('horario');
        $dados->dia = $request->input('dia');
        $dados->avaliacao = $request->input('avaliacao');
        $dados->save();
        return redirect('/agendamento')->with('success', 'Novo agendamento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

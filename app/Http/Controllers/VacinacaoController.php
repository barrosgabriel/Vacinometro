<?php

namespace App\Http\Controllers;

use App\Vacinacao;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class VacinacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacinacao = Vacinacao::all();

        return view('index', compact('vacinacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacinacao = new Vacinacao();
        return view('cadastroVacinacao', [
            'vacinacao' => $vacinacao->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacinacao = new Vacinacao();
        $vacinacao->dia = $request->dia;
        $vacinacao->dosesRecebidas = $request->dosesRecebidas;
        $vacinacao->dosesAplicadas = $request->dosesAplicadas;
        $vacinacao->primeiraDoseAplicada = $request->primeiraDoseAplicada;
        $vacinacao->segundaDoseAplicada = $request->segundaDoseAplicada;
        $vacinacao->save();

        // Alert::success('Cadastrado', 'Cadastrado com sucesso');

        return redirect()->route('vacinacao.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacinacao  $vacinacao
     * @return \Illuminate\Http\Response
     */
    public function show(Vacinacao $vacinacao)
    {
        $vacinacao = new Vacinacao();
        return view('listVacinacao', [
            'Vacinacao' => $vacinacao->all()
        ]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacinacao  $vacinacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacinacao $vacinacao, Request $request, $id)
    {
        $vacinacao = Vacinacao::where('id', '=', $id)->first();
        return view('editvacinacao', [
            'Vacinacao' =>$vacinacao
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacinacao  $vacinacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacinacao $vacinacao)
    {
        $id = $request->id;
        $dia = $request->dia;
        $dosesRecebidas = $request->dosesRecebidas;
        $dosesAplicadas = $request->dosesAplicadas;
        $primeiraDoseAplicada = $request->primeiraDoseAplicada;
        $segundaDoseAplicada = $request->segundaDoseAplicada;
        Vacinacao::find($id)->update([
            'id' => $id,
            'dia' => $dia,
            'dosesRecebidas' => $dosesRecebidas,
            'dosesAplicadas' => $dosesAplicadas,
            'primeiraDoseAplicada' => $primeiraDoseAplicada,
            'segundaDoseAplicada' => $segundaDoseAplicada
            
        ]);
        return redirect()->route('vacinacao.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacinacao  $vacinacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacinacao $vacinacao)
    {
        //
    }

    public function menu()
    {
        return view('main');
    }
}

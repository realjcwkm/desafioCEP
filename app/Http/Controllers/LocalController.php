<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;
use App\Http\Controllers\Controller;

class LocalController extends Controller
{
    private $local;

    public function __construct()
    {
        $this->local = new Local();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $locais = $this->local->all();
        return view('index', compact('locais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastrado = $this->local->create([
            'nome' => $request->nome,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'complemento' => $request->complemento,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'uf' => $request->uf,
            'cidade' => $request->cidade,
            'data' => $request->data,
        ]);

        if ($cadastrado) {
            return redirect('local');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locais = $this->local->find($id);

        return view('edit', compact('locais'));
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
        $this->local->where(['id' => $id])->update([
            'nome' => $request->nome,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'complemento' => $request->complemento,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'uf' => $request->uf,
            'cidade' => $request->cidade,
            'data' => $request->data,
        ]);
        return redirect('local');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->local->find($id);
        $del->delete();

        return redirect('/local')->with('success', 'Task deleted successfully');
    }
}

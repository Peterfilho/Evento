<?php

namespace evento\Http\Controllers;

use Illuminate\Http\Request;

class PatrocinadoresController extends Controller
{

    protected $patrocinador;

    public function __construct(Evento $patrocinador)
    {
        $this->patrocinador = $patrocinador;
    }

    public function index()
    {
        $patrocinadores = $this->patrocinador->findAll();

        return view('patrocinador.index', compact(patrocinadores));
    }


    public function create()
    {
        return view('patrocinador.cadastrar');
    }


    public function store(Request $request)
    {
        $patrocinadores = $this->patrocinador->save($request->all());
    }

    public function show($id)
    {
        $patrocinadores = $this->patrocinador->find($id);
    }


    public function edit($id)
    {
        $patrocinadores = $this->patrocinador->edit($id);
    }


    public function update(Request $request, $id)
    {
        $patrocinadores = $this->patrocinador->update($request->all(), $id);
    }


    public function destroy($id)
    {
        $patrocinadores = $this->patrocinador->delete($id);
    }
}

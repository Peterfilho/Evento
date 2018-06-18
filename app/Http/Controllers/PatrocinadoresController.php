<?php

namespace evento\Http\Controllers;

use Illuminate\Http\Request;
use evento\Services\PatrocinadorService;
use evento\Models\Patrocinador;

class PatrocinadoresController extends Controller
{
    protected $patrocinadorService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(PatrocinadorService $patrocinadorService)
    {
        $this->patrocinadorService = $patrocinadorService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patrocinadores = $this->patrocinadorService->findAll();
        dd($patrocinadores);
        return view('patrocinador.index', compact('patrocinadores'));
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
        $patrocinador = new Patrocinador;
        $patrocinador->fromArray($request->all());
        return $this->patrocinadorService->save($patrocinador->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patrocinadores = $this->patrocinadorService->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patrocinadors = $this->patrocinadorService->edit($id);
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
        $data = $this->patrocinadorService->find($id);
        $data = array_merge($data, $request->all());
        $patrocinador = new Evento;
        $patrocinador->fromArray($data);
        return $this->patrocinadorService->update($id, $patrocinador->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patrocinadors = $this->patrocinadorService->delete($id);
    }
}

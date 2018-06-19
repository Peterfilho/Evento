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

        return view('Patrocinador.index', compact('patrocinadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Patrocinador.create', compact('patrocinador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ], $messages = [
            'required' => 'Campo obrigatório!',
        ]);

        $patrocinador = new Patrocinador;
        $patrocinador->fromArray($request->all());
        $patrocinador = $this->patrocinadorService->save($patrocinador->toArray());

        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Patrocinador  com sucesso!', 'success');
        return redirect('sponsors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patrocinador = $this->patrocinadorService->find($id);
        return view('Patrocinador.show', compact('patrocinador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patrocinador = $this->patrocinadorService->find($id);
        return view('Patrocinador.edit', ['patrocinador' => $patrocinador]);
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
        $patrocinador = new Patrocinador;
        $patrocinador->fromArray($data);
        $this->patrocinadorService->update($id, $patrocinador->toArray());
        return redirect('/sponsors');
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
        return redirect('/sponsors');
    }
}

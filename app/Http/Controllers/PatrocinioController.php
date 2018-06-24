<?php

namespace evento\Http\Controllers;

use Illuminate\Http\Request;
use evento\Services\PatrocinioService;
use evento\Services\PatrocinadorService;
use evento\Services\ReceitaService;
use evento\Models\Patrocinio;
use evento\Models\Receita;

class PatrocinioController extends Controller
{
    protected $patrocinioService;
    protected $patrocinadorService;
    protected $receitaService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(PatrocinioService $patrocinioService, PatrocinadorService $patrocinadorService, ReceitaService $receitaService)
    {
        $this->patrocinioService = $patrocinioService;
        $this->patrocinadorService = $patrocinadorService;
        $this->receitaService = $receitaService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patrocinios = $this->patrocinioService->findAll();

        return view('Patrocinio.index', compact('patrocinios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $event_id = $id;
        $patrocinadores = $this->patrocinadorService->findAll();

        return view('Patrocinio.create', compact('patrocinadores', 'event_id'));
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
          'value' => 'required',
      ], $messages = [
          'required' => 'Campo obrigatório!',
      ]);
        $patrocinio = new Patrocinio;
        $patrocinio->fromArray($request->all());
        $patrocinio = $this->patrocinioService->save($patrocinio->toArray());

        $receita = new Receita;
        $receita_array = ['event_id' => $request->input('event_id'), 'start_value' => $request->input('value')];
        $receita->fromArray($receita_array);
        $receita = $this->receitaService->save($receita->toArray());

        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Patrocinio  com sucesso!', 'success');
        return redirect('events/' . $patrocinio['event_id']); // mudar
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patrocinio = $this->patrocinioService->find($id);
        return view('Patrocinio.show', compact('patrocinio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patrocinio = $this->patrocinioService->find($id);
        return view('Patrocinio.edit', ['patrocinio' => $patrocinio]);
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
        $data = $this->patrocinioService->find($id);
        $data = array_merge($data, $request->all());
        $patrocinio = new Patrocinio;
        $patrocinio->fromArray($data);
        $this->patrocinioService->update($id, $patrocinio->toArray());
        return redirect('events/' . $patrocinio->event_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patrocinio = $this->patrocinioService->delete($id);
        return redirect('/events');
    }
}

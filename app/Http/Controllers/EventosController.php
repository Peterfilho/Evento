<?php

namespace evento\Http\Controllers;

use Illuminate\Http\Request;
use evento\Services\EventoService;
use evento\Models\Evento;

class EventosController extends Controller
{
    protected $eventoService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(EventoService $eventoService)
    {
        $this->eventoService = $eventoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = $this->eventoService->findAll();
        //var_dump($eventos);
      //  exit;
        return view('evento.index', compact('eventos'));
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
        $evento = new Evento;
        $evento->fromArray($request->all());
        $event = $this->eventoService->save($evento->toArray());
        //var_dump($event);
        //exit;
        return view('Layout.app');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventos = $this->eventoService->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventos = $this->eventoService->find($id);
        return view('eventos.edit', ['evento' => $evento])
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
        $data = $this->eventoService->find($id);
        $data = array_merge($data, $request->all());
        $evento = new Evento;
        $evento->fromArray($data);
        return $this->eventoService->update($id, $evento->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos = $this->eventoService->delete($id);
    }
}

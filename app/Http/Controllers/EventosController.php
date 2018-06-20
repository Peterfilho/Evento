<?php

namespace evento\Http\Controllers;

use Illuminate\Http\Request;
use evento\Services\EventoService;
use evento\Services\PatrocinadorService;
use evento\Services\PatrocinioService;
use evento\Models\Evento;

class EventosController extends Controller
{
    protected $eventoService;
    protected $patrocinadorService;
    protected $patrocinioService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(EventoService $eventoService, PatrocinioService $patrocinioService, PatrocinadorService $patrocinadorService)
    {
        $this->eventoService = $eventoService;
        $this->patrocinadorService = $patrocinadorService;
        $this->patrocinioService = $patrocinioService;
    }



    public function index()
    {
        $eventos = $this->eventoService->findAll();

      //  exit;
        return view('evento.index', compact('eventos'));
    }

    public function create()
    {
        return view('evento.create', compact('evento'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'event_date' => 'required',
            'site' => 'required',
            'description' => 'required',
            'event_hour' => 'required',
        ], $messages = [
            'required' => 'Campo obrigatório!',
        ]);

        $evento = new Evento;
        $evento->fromArray($request->all());
        $evento = $this->eventoService->save($evento->toArray());
        //var_dump($event);
        //exit;btn btn-primary
        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Evento  com sucesso!', 'success');
        return redirect('events');
    }

    public function show($id)
    {
        $evento = $this->eventoService->find($id);
        //dd($evento);
        $patrocinadores = $this->patrocinadorService->findAll();
        return view('evento.show', compact('evento', 'patrocinadores'));

    }

    public function edit($id)
    {
        $eventos = $this->eventoService->find($id);
        return view('evento.edit', ['evento' => $eventos]);
    }

    public function update(Request $request, $id)
    {

        $data = $this->eventoService->find($id);
        $data = array_merge($data, $request->all());
        $evento = new Evento;
        $evento->fromArrayUpdate($data);
        $this->eventoService->update($id, $evento->toArray());

        return view('Layout.app');
    }

    public function destroy($id)
    {
        $eventos = $this->eventoService->delete($id);
        return redirect('/events');
    }
}

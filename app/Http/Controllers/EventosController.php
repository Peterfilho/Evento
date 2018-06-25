<?php
namespace evento\Http\Controllers;
use Illuminate\Http\Request;
use evento\Services\EventoService;
use evento\Services\AtracaoService;
use evento\Services\PatrocinadorService;
use evento\Services\MarketingService;
use evento\Services\MarketingEventoService;
use evento\Services\PatrocinioService;
use evento\Models\Evento;

class EventosController extends Controller
{
    protected $eventoService;
    protected $patrocinadorService;
    protected $patrocinioService;
    protected $atracaoService;
    protected $marketingEventoService;
    protected $marketingService;
    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(EventoService $eventoService,
                                AtracaoService $atracaoService,
                                PatrocinioService $patrocinioService,
                                PatrocinadorService $patrocinadorService,
                                MarketingService $marketingService,
                                MarketingEventoService $marketingEventoService)
    {
        $this->eventoService = $eventoService;
        $this->patrocinadorService = $patrocinadorService;
        $this->patrocinioService = $patrocinioService;
        $this->atracaoService = $atracaoService;
        $this->marketingEventoService = $marketingEventoService;
        $this->marketingService = $marketingService;
    }

    public function index()
    {
        $eventos = $this->eventoService->findAll();
        //  exit;
        return view('evento.index', compact('eventos'));
    }

    public function finalizar(Request $request, $id)
    {

        $data = $this->eventoService->find($id);
        $request['status'] = false;
        $data = array_merge($data, $request->all());
        $evento = new Evento;
        $evento->fromArrayUpdate($data);
        $this->eventoService->update($id, $evento->toArray());

        flash("<i class='fa fa-check-square-o' aria-hidden='true'></i> Evento  finalizado sucesso!", 'success');
        return redirect('events');
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
            'profit_ticket' => 'required',
        ], $messages = [
            'required' => 'Campo obrigatório!',
        ]);
        $evento = new Evento;
        ($request ['status']  = true);
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
        $patrocinadores = $this->patrocinadorService->findAll();
        $patrocinios = $this->patrocinioService->findAll();
        $marketings = $this->marketingService->findAll();
        $marketingsEvento = $this->marketingEventoService->findAll();
        $atracoes = $this->atracaoService->findAll();
        //dd($patrocinios);
        return view('evento.show', compact('evento', 'patrocinios',
         'patrocinadores', 'atracoes', 'marketings', 'marketingsEvento'));
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
        return redirect('events/' . $id);
    }
    public function destroy($id)
    {
        
        $eventos = $this->eventoService->delete($id);
        return redirect('/events');
    }
}

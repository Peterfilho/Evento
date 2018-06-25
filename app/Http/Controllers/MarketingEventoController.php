<?php

namespace evento\Http\Controllers;

use Illuminate\Http\Request;
use evento\Services\MarketingEventoService;
use evento\Services\DespesaService;
use evento\Models\MarketingEvento;
use evento\Models\Despesa;

class MarketingEventoController extends Controller
{
    protected $marketinEventogService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(MarketingEventoService $marketingEventoService)
    {
        $this->marketingEventoService = $marketingEventoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // busca todos os marketing de evento
        $marketings = $this->marketingEventoService->findAll();

        return redirect('events/' . $marketingEvento['event_id'], compact('marketings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        // cadastra um marketing para o evento
        $marketingEvento = new MarketingEvento;
        $marketingEvento->fromArray($request->all());

        $marketingEvento = $this->marketingEventoService->save($marketingEvento->toArray());

        // descomentar quando estiver funcionado o cadastro
        /*$despesa = new Despesa;
        $despesa_array = ['expense_event_id' => $request->input('event_id'),
        'expense_type' => 'marketing','expense_value' => $request->input('value')];
        $despesa->fromArray($despesa_array);
        $despesa = $this->despesaService->save($despesa->toArray());*/

        // retorna para o evento
        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Marketing salvo com sucesso!', 'success');
        return redirect('events/' . $marketingEvento['event_id']);
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
        // edita um marketing do evento
        $data = $this->marketingEventoService->find($id);
        $data = array_merge($data, $request->all());
        $marketingEvento = new MarketingEvento;
        $marketingEvento->fromArray($data);
        $this->marketingEventoService->update($id, $marketingEvento->toArray());

        // descomentar quando estier funcionado a edicao
        /*$despesa = new Despesa;
        $despesa_array = ['expense_event_id' => $request->input('event_id'), 'description' => 'marketing',
        'expense_type' => 'marketing','expense_value' => $request->input('value')];
        $despesa->fromArray($despesa_array);
        $despesa = $this->despesaService->save($despesa->toArray());*/

        return redirect('events/' . $marketingEvento['event_id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // pega o id do evento
        $marketing = $this->marketingEventoService->find($id);
        $event_id = $marketing->event_id;
        // deleta o marketing
        $this->marketingEventoService->delete($id);
        // retirna para o evento
        return redirect('events/' . $event_id);
    }
}

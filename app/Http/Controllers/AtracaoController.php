<?php
/**
 * Created by PhpStorm.
 * User: erika
 * Date: 18/06/18
 * Time: 01:11
 */

namespace evento\Http\Controllers;

use Illuminate\Http\Request;
use evento\Services\AtracaoService;
use evento\Services\EventoService;
use evento\Services\DespesaService;
use evento\Models\Atracao;
use evento\Models\Despesa;


class AtracaoController  extends Controller
{

    protected $atracaoService;
    protected $eventoService;
    protected $despesaService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(AtracaoService $atracaoService, EventoService $eventoService, DespesaService $despesaService)
    {
        $this->atracaoService = $atracaoService;
        $this->eventoService = $eventoService;
        $this->despesaService = $despesaService;
    }

    public function index()
    {
        $atracoes = $this->atracaoService->findAll();
        return view('Atracao.index', compact('atracoes'));
    }

    public function create($id)
    {
        $event_id = $id;
        return view('Atracao.create', compact('event_id'));
    }

    public function show($id)
    {
        $atracao = $this->atracaoService->find($id);
    }

    public function store(Request $request)
    {
        // cadastra uma atracao
        $atracao= new Atracao;
        $atracao->fromArray($request->all());
        $atracao = $this->atracaoService->save($atracao->toArray());

        // cadastra uma despesa do tipo atracao
        $despesa = new Despesa;
        $despesa_array = ['expense_event_id' => $request->input('attraction_event_id'),
        'expense_type' => 'Atracao','expense_value' => $request->input('value')];
        //dd($despesa_array);
        $despesa->fromArray($despesa_array);
        $despesa = $this->despesaService->save($despesa->toArray());

        // retorna para o evento
        return redirect('events/' . $atracao['attraction_event_id']);
    }

    public function edit($id)
    {}


    public function update(Request $request, $id)
    {
      // atualiza a atracao
      /*$data = $this->atracaoService->find($id);
      $data = array_merge($data, $request->all());
      $atracao = new Atracao;
      $atracao->fromArray($data);
      $this->atracaoService->update($id, $atracao->toArray());*/

      // cadastra uma despesa do tipo atracao
      // descomentar depois que estiver atualizando certo
      /*$despesa = new Despesa;
      $despesa_array = ['expense_event_id' => $request->input('event_id'), 'description' => 'Atracao',
      'expense_type' => 'Atracao','expense_value' => $request->input('value')];
      $despesa->fromArray($despesa_array);
      $despesa = $this->despesaService->save($despesa->toArray());*/

      // retorna para o evento
    /*  return redirect('events/' . $atracao->event_id);*/
    }

    public function destroy($id)
    {
      // para pegar o id do evento
      $atracao = $this->atracaoService->find($id);
      $event_id = $atracao->attraction_event_id;

      // deleta a atracao
      $this->atracaoService->delete($id);

      // retorna para o evento
      return redirect('events/' . $event_id);
    }

}

<?php
namespace evento\Http\Controllers;
use Illuminate\Http\Request;
use evento\Services\EventoService;
use evento\Services\ReceitaService;
use evento\Services\DespesaService;
use evento\Services\CaixaService;
use evento\Models\Caixa;


class CaixaController extends Controller
{
    protected $eventoService;
    protected $receitaService;
    protected $despesaService;
    protected $caixaService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(EventoService $eventoService,
                                DespesaService $despesaService,
                                ReceitaService $receitaService,
                                CaixaService $caixaService)
    {
        $this->eventoService = $eventoService;
        $this->despesaService = $despesaService;
        $this->receitaService = $receitaService;
        $this->caixaService = $caixaService;
    }

    public function index()
    {
        $caixas = $this->caixaService->findAll();
        //  exit;
        //return view('evento.index', compact('eventos'));
    }

    public function create()
    {
        return view('evento.create', compact('evento'));
    }

    public function store(Request $request)
    {
        // busca todas as receitas e soma apenas as receitas de 1 evento
        $receitas = $this->receitaService->findAll();
        $total_revenue = 0;
        foreach ($receitas as $receita) {
            if($receitas['event_id']==$request->input('event_id')){
              $total_revenue+=$receita['start_value'];
            }
        }

        // busca todas as despesas e soma apenas as despesas de 1 evento
        $despesas = $this->despesaService->findAll();
        $total_expenses = 0;
        foreach ($despesas as $despesa) {
            if($despesa['expense_event_id']==$request->input('event_id')){
              $total_expenses+=$despesa['expense_value'];
            }
        }

        // calcula o lucro
        $profit = $total_revenue - $total_expenses;

        // salva no caixa
        $caixa = new Caixa;
        $caixa_array = ['profit' => $profit, 'total_revenue' => $total_revenue ,
        'total_expenses' => $total_expenses,  'event_id' => $request->input('event_id')];

        $caixa->fromArray($caixa_array);
        $this->caixaService->save($caixa->toArray());

        //return redirect('events'); direcionar para pagina de relatorio
    }
    public function show($id)
    {
      $caixa = $this->caixaService->find($id);
      //return view('evento.create', compact('caixa')); // pagina de relatorio
    }
    public function edit($id)
    {}
    public function update(Request $request, $id)
    {}
    public function destroy($id)
    {}
}

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
use evento\Models\Atracao;
use evento\Models\Evento;

class AtracaoController  extends Controller
{

    protected $atracaoService;
    protected $eventoService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(AtracaoService $atracaoService, EventoService $eventoService)
    {
        $this->atracaoService = $atracaoService;
        $this->eventoService = $eventoService;
    }

    public function index()
    {
        $atracoes = $this->atracaoService->findAll();
        //dd($atracoes);
        return view('atracao.index', compact('atracoes'));
    }

    public function create()
    {
        $eventos = $this->eventoService->findAll();
        dd($eventos);
        return view('atracao.create', compact('atracao', 'eventos'));
    }

    public function show($id)
    {
        $atracao = $this->atracaoService->find($id);
    }

    public function store(Request $request)
    {

        $atracao= new Atracao;
        $atracao->fromArray($request->all());
        $atracao = $this->atracaoService->save($atracao->toArray());
        dd('dfff');
        //exit;
        return view('Layout.app');
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}
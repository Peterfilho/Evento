<?php

namespace evento\Http\Controllers;

use Illuminate\Http\Request;
use evento\Services\MarketingService;
use evento\Models\Marketing;

class MarketingController extends Controller
{
    protected $marketingService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(MarketingService $marketingService)
    {
        $this->marketingService = $marketingService;
    }

    public function index()
    {
        $marketings = $this->marketingService->findAll();

        return view('marketing.index', compact('marketings'));
    }


    public function create()
    {
        return view('marketing.create', compact('marketing'));
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required',
          'description' => 'required',
      ], $messages = [
          'required' => 'Campo obrigatório!',
      ]);
        $marketing = new Marketing;
        $marketing->fromArray($request->all());
        $marketing->value= 0;
        $marketing = $this->marketingService->save($marketing->toArray());

        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Marketing salvo com sucesso!', 'success');
        return redirect('marketings');
    }

    public function show($id)
    {
        $marketing = $this->marketingService->find($id);
        return view('marketing.show', compact('marketing'));

    }

    public function edit($id)
    {
        $marketing = $this->marketingService->find($id);
        return view('marketing.edit', ['marketing' => $marketing]);
    }


    public function update(Request $request, $id)
    {
        $data = $this->marketingService->find($id);
        $data = array_merge($data, $request->all());
        $marketing = new Marketing;
        $marketing->fromArray($data);
        $this->marketingService->update($id, $marketing->toArray());
        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Marketing atualizado com sucesso!', 'success');
        return redirect('/marketings');
    }


    public function destroy($id)
    {
        $marketings = $this->marketingService->delete($id);
        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Marketing deletado com sucesso!', 'success');
        return redirect('/marketings');
    }
}

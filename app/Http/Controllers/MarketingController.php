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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketings = $this->marketingService->findAll();

        return view('Marketing.index', compact('marketings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Marketing.create', compact('marketing'));
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
          'value' => 'required',
      ], $messages = [
          'required' => 'Campo obrigatório!',
      ]);
        $marketing = new Marketing;
        $marketing->fromArray($request->all());
        $marketing = $this->marketingService->save($marketing->toArray());

        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Marketing  com sucesso!', 'success');
        return redirect('marketings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marketing = $this->marketingService->find($id);
        return view('Marketing.show', compact('marketing'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marketing = $this->marketingService->find($id);
        return view('Marketing.edit', ['marketing' => $marketing]);
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
        $data = $this->marketingService->find($id);
        $data = array_merge($data, $request->all());
        $marketing = new Marketing;
        $marketing->fromArray($data);
        $this->marketingService->update($id, $marketing->toArray());
        return redirect('/marketings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marketings = $this->marketingService->delete($id);
        return redirect('/marketings');
    }
}

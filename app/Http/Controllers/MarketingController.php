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
        $marketing = $this->marketingService->findAll();

        return view('Marketing.index', compact($marketing));
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
        $marketing = new Marketing;
        $marketing->fromArray($request->all());
        return $this->marketingService->save($marketing->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marketings = $this->marketingService->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marketings = $this->marketingService->edit($id);
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
        $marketing = new Evento;
        $marketing->fromArray($data);
        return $this->marketingService->update($id, $marketing->toArray());
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
    }
}

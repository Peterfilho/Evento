<?php

namespace evento\Http\Controllers;

use Illuminate\Http\Request;
use evento\Services\PatrocinadorService;
use evento\Models\Patrocinador;

class PatrocinadoresController extends Controller
{
    protected $patrocinadorService;

    // cria uma nova instancia de Evento
    // e os metodos estão disponiveis para o controlador

    public function __construct(PatrocinadorService $patrocinadorService)
    {
        $this->patrocinadorService = $patrocinadorService;
    }


    public function index()
    {
        $patrocinadores = $this->patrocinadorService->findAll();

        return view('patrocinador.index', compact('patrocinadores'));
    }

    public function create()
    {
        return view('patrocinador.create', compact('patrocinador'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ], $messages = [
            'required' => 'Campo obrigatório!',
        ]);

        $patrocinador = new Patrocinador;
        $patrocinador->fromArray($request->all());
        $patrocinador = $this->patrocinadorService->save($patrocinador->toArray());

        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Patrocinador salvo com sucesso!', 'success');
        return redirect('sponsors');
    }


    public function show($id)
    {
        $patrocinador = $this->patrocinadorService->find($id);
        return view('patrocinador.show', compact('patrocinador'));
    }


    public function edit($id)
    {
        $patrocinador = $this->patrocinadorService->find($id);
        return view('patrocinador.edit', ['patrocinador' => $patrocinador]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->patrocinadorService->find($id);
        $data = array_merge($data, $request->all());
        $patrocinador = new Patrocinador;
        $patrocinador->fromArray($data);
        $this->patrocinadorService->update($id, $patrocinador->toArray());
        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Patrocinador atualizado com sucesso!', 'success');
        return redirect('/sponsors');
    }

    public function destroy($id)
    {
       // $patrocinador = $this->patrocinadorService->delete($id);
        ($patrocinador = $this->patrocinadorService->delete($id));
        flash('<i class="fa fa-check-square-o" aria-hidden="true"></i> Patrocinador deletado com sucesso!', 'success');
        return redirect('/sponsors');


    }
}

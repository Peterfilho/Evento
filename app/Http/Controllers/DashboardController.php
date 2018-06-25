<?php
/**
 * Created by PhpStorm.
 * User: erika
 * Date: 18/06/18
 * Time: 16:32
 */

namespace evento\Http\Controllers;
use evento\Services\EventoService;

class DashboardController extends  Controller
{

    public function __construct(EventoService $eventoService)
    {
        $this->eventoService = $eventoService;
    }

    public  function  index(){
        $eventos =$this->eventoService->findAll();
        foreach ($eventos as $key => $evento) {
            if ($evento['status'] ==1){
                $andamento[$key] = $evento;
            }else{
                $finalizado[$key] = $evento;
            }
        }
        return view('dashboard.index', compact('andamento', 'finalizado'));
    }

    public  function  andamento(){
        $eventos =$this->eventoService->findAll();
        foreach ($eventos as $key => $evento) {
            if ($evento['status'] ==1) {
                $andamentos[$key] = $evento;
            }
        }
        return view('dashboard.andamento', compact('andamentos'));
    }

    public  function  finalizado(){
        $eventos =$this->eventoService->findAll();
        foreach ($eventos as $key => $evento) {
            if ($evento['status'] ==0) {
                $finalizados[$key] = $evento;
            }
        }
        return view('dashboard.andamento', compact('finalizados'));
    }
}
<?php
namespace evento\Models;

class Evento
{
    //public $id;
    public $nome;
    public $data;
    public $horario;
    public $local;
    public $descricao;
    public $status;
    public $eventocol; // ?


    public function dateConvert($date){

    // 26/03/2018
    $ano= substr($date, 6);
    $mes= substr($date, 3,-5);
    $dia= substr($date, 0,-8);
    return $ano."-".$mes."-".$dia;
  }

    public function fromArray(array $data)
    {

        //$this->id    = $data['id'] ?? null;
        $this->nome  = $data['name'] ?? null;
        $this->data = $this->dateConvert($data['date']) ?? null;
        $this->horario = $data['time'] ?? null;
        $this->local = $data['local'] ?? null;
        $this->descricao = $data['description'] ?? null;
        $this->status = $data['status'] ?? null;
        //$this->eventocol = $data['eventocol'] ?? null;
    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'name'  => $this->nome,
            'date' => $this->data,
            'time' => $this->horario,
            'local' => $this->local,
            'description' => $this->descricao,
            'status' => true,
            //'eventocol' => $this->eventocol,
        ];
    }
}

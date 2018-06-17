<?php
namespace evento\Models;

class Evento
{
    public $id;
    public $nome;
    public $data;
    public $horario;
    public $local;
    public $descricao;
    public $status;
    public $eventocol; // ?

    public function fromArray(array $data)
    {
        $this->id    = $data['id'] ?? null;
        $this->nome  = $data['nome'] ?? null;
        $this->data = $data['data'] ?? null;
        $this->horario = $data['horario'] ?? null;
        $this->local = $data['local'] ?? null;
        $this->descricao = $data['descricao'] ?? null;
        $this->status = $data['status'] ?? null;
        //$this->eventocol = $data['eventocol'] ?? null;
    }
    public function toArray()
    {
        return [
            'id'    => $this->id,
            'nome'  => $this->nome,
            'data' => $this->data,
            'horario' => $this->horario,
            'local' => $this->local,
            'descricao' => $this->descricao,
            'status' => $this->status,
            //'eventocol' => $this->eventocol,
        ];
    }
}

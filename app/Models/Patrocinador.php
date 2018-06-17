<?php
namespace evento\Models;

class Patrocinador
{
    //public $id;
    public $name;
    public $description;
    public $value;

    public function fromArray(array $data)
    {

        //$this->id    = $data['id'] ?? null;
        $this->nome  = $data['name'] ?? null;
        $this->descricao = $data['description'] ?? null;
        $this->value = $data['value'] ?? null;

    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'name'  => $this->nome,
            'description' => $this->descricao,
            'value' => $this->value,
        ];
    }
}

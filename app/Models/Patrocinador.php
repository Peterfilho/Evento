<?php
namespace evento\Models;

class Patrocinador
{
    //public $id;
    public $name;
    public $description;

    public function fromArray(array $data)
    {

        //$this->id    = $data['id'] ?? null;
        $this->name  = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;

    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'name'  => $this->name,
            'description' => $this->description,
        ];
    }
}

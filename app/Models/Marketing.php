<?php
namespace evento\Models;

class Marketing
{
    //public $id;
    public $name;
    public $description;
    public $value;

    public function fromArray(array $data)
    {

        //$this->id    = $data['id'] ?? null;

        $this->name  = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->value = $data['value'] ?? null;

    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'name'  => $this->name,
            'description' => $this->description,
            'value' => $this->value,
        ];
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: erika
 * Date: 18/06/18
 * Time: 01:18
 */

namespace evento\Models;


class Atracao
{
    public $name;
    public $description;

    public function fromArray(array $data)
    {

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
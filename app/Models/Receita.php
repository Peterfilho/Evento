<?php
namespace evento\Models;

class Receita
{
    //public $id;
    public $start_value;
    public $event_id;;

    public function fromArray(array $data)
    {

        //$this->id    = $data['id'] ?? null;

        $this->start_value  = $data['start_value'] ?? null;
        $this->event_id = $data['event_id'] ?? null;
    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'start_value'  => $this->start_value,
            'event_id' => $this->event_id,
        ];
    }
}

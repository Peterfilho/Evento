<?php
namespace evento\Models;

class Patrocinio
{
    //public $id;
    public $event_id;
    public $sponsor_id;
    public $value;

    public function fromArray(array $data)
    {

        //$this->id    = $data['id'] ?? null;

        $this->event_id  = $data['event_id'] ?? null;
        $this->sponsor_id = $data['sponsor_id'] ?? null;
        $this->value = $data['value'] ?? null;

    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'event_id'  => $this->event_id,
            'sponsor_id' => $this->sponsor_id,
            'value' => $this->value,
        ];
    }
}

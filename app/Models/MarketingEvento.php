<?php
namespace evento\Models;

class MarketingEvento
{
    //public $id;
    public $event_id;
    public $marketing_id;
    public $value;

    public function fromArray(array $data)
    {

        //$this->id    = $data['id'] ?? null;

        $this->event_id  = $data['event_id'] ?? null;
        $this->marketing_id = $data['marketing_id'] ?? null;
        $this->value = $data['value'] ?? null;

    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'event_id'  => $this->event_id,
            'marketing_id' => $this->marketing_id,
            'value' => $this->value,
        ];
    }
}

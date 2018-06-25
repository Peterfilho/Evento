<?php

namespace evento\Models;

class Caixa

{
    protected $profit;
    protected $description;
    protected $total_revenue;
    protected $total_expenses;
    protected $event_id;

    public function fromArray(array $data)
    {

        $this->profit  = $data['profit'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->total_revenue = $data['total_revenue'] ?? null;
        $this->total_expenses = $data['total_expenses'] ?? null;
        $this->event_id = $data['event_id'] ?? null;

    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'profit'  => $this->profit,
            'description' => $this->description,
            'total_revenue' => $this->total_revenue,
            'total_expenses' => $this->total_expenses,
            'event_id' => $this->event_id,
        ];
    }

}

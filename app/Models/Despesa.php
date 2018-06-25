<?php
namespace evento\Models;

class Despesa
{
    //public $id;
    public $expense_value;
    public $expense_type;
  //  public $description;
    public $expense_event_id;

    public function fromArray(array $data)
    {

        //$this->id    = $data['id'] ?? null;

        $this->expense_value  = $data['expense_value'] ?? null;
        $this->expense_type = $data['expense_type'] ?? null;
        //$this->description = $data['description'] ?? null;
        $this->expense_event_id = $data['expense_event_id'] ?? null;
    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'expense_value'  => $this->expense_value,
            'expense_type' => $this->expense_type,
            //'description' => $this->description,
            'expense_event_id' => $this->expense_event_id,
        ];
    }
}

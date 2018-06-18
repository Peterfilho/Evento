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
    protected $fillable = ['name', 'description'];


    public function event()
    {
        return $this->belongsTo('App\Model\Evento');
    }

    public $name;
    public $description;
    public $event_id;

    public function fromArray(array $data)
    {

        $this->name  = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->event_id = $data['event_id'] ?? null;

    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'name'  => $this->name,
            'description' => $this->description,
            'event_id' => $this->event_id,
        ];
    }

}
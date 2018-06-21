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
    public $attraction_event_id;

    public function fromArray(array $data)
    {

        $this->name  = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->attraction_event_id = $data['attraction_event_id'] ?? null;

    }
    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'name'  => $this->name,
            'description' => $this->description,
            'attraction_event_id' => $this->attraction_event_id,
        ];
    }

}

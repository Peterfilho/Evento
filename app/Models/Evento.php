<?php
namespace evento\Models;

class Evento
{
    //public $id;
    public $name;
    public $event_date;
    public $event_hour;
    public $site;
    public $description;
    public $status;
    public $eventocol; // ?


    public function dateConvert($date){

    // 26/03/2018
    $ano= substr($date, 6);
    $mes= substr($date, 3,-5);
    $dia= substr($date, 0,-8);
    return $ano."-".$mes."-".$dia;
  }

    public function fromArray(array $data)
    {

        //$this->id    = $data['id'] ?? null;
        $this->name  = $data['name'] ?? null;
        $this->event_date = $this->dateConvert($data['event_date']) ?? null;
        $this->event_hour = $data['event_hour'] ?? null;
        $this->site = $data['site'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->eventocol = $data['eventocol'] ?? null;
    }

    public function fromArrayUpdate(array $data)
    {

        //$this->id    = $data['id'] ?? null;
        $this->name  = $data['name'] ?? null;
        $this->event_date = $data['event_date'] ?? null;
        $this->event_hour = $data['event_hour'] ?? null;
        $this->site = $data['site'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->eventocol = $data['eventocol'] ?? null;
    }

    public function toArray()
    {
        return [
            //'id'    => $this->id,
            'name'  => $this->name,
            'event_date' => $this->event_date,
                'event_hour' => $this->event_hour,
                'site' => $this->site,
                'description' => $this->description,
                'status' => true,
                'eventocol' => $this->eventocol,
        ];
    }

    public function register()
    {
        return $this->belongsToMany('App\Model\Atracao');
    }
}

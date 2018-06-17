<?php

namespace evento\Repositories;

use GuzzleHttp\Client;

class Evento extends GuzzleHttpRequest
{
  protected $client;

  // classe responsavel pelos eventos
  function __construct(Client $client)
  {
      $this->client = $client;
  }

  /*
    Encontra todos os evento
  */
  public function findAll()
  {
    return $this->requestType('GET', 'eventos'); // generico
    //return $this->get('eventos'); // especifico para get
  }

  /*
    Encontra um evento
  */
  public function find($id)
  {
    return $this->requestType('GET', 'eventos');
    //return $this->get('eventos/{$id}');
  }

  /*
    Cadastra um evento
  */
  public function save($evento)
  {
    return $this->requestType('post', 'eventos');
    //return $this->post('eventos/{$id}');
  }

  /*
    Deleta um evento
  */
  public function delete($id)
  {
    //return $this->requestType('..DELETE', 'eventos/{$id}'); // arrumar metodo delete ou fazer especifico
    return $this->delete('eventos/{$id}');
  }

  /*
    Edita um evento
  */
  public function edit($id)
  {
    return $this->requestType('GET', 'eventos/{$id}/edit');
    //return $this->get('eventos/{$id}/edit');
  }

  public function update($evento, $id)
  {
    return $this->requestType('PUT', 'eventos/{$id}');
    //return $this->put('eventos/{$id}');
  }

}

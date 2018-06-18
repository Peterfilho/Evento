<?php
/**
 * Created by PhpStorm.
 * User: Erika.Santos
 * Date: 12/06/2018
 * Time: 10:22
 */

namespace evento\Repositories;

use GuzzleHttp\Client;

class Patrocinador extends GuzzleHttpRequest
{

    protected $client;

    // classe responsavel pelos patrocinadors
    function __construct(Client $client)
    {
        $this->client = $client;
    }

    /*
      Encontra todos os patrocinador
    */
    public function findAll()
    {
        return $this->requestType('GET', 'patrocinador'); // generico
        //return $this->get('patrocinador'); // especifico para get
    }

    /*
      Encontra um patrocinador
    */
    public function find($id)
    {
        return $this->requestType('GET', 'patrocinador');
        //return $this->get('patrocinador/{$id}');
    }

    /*
      Cadastra um patrocinador
    */
    public function save($patrocinador)
    {
        return $this->requestType('post', 'patrocinador');
        //return $this->post('patrocinador/{$id}');
    }

    /*
      Deleta um patrocinador
    */
    public function delete($id)
    {
        //return $this->requestType('..DELETE', 'patrocinador/{$id}'); // arrumar metodo delete ou fazer especifico
        return $this->delete('patrocinador/{$id}');
    }

    /*
      Edita um patrocinador
    */
    public function edit($id)
    {
        return $this->requestType('GET', 'patrocinador/{$id}/edit');
        //return $this->get('patrocinador/{$id}/edit');
    }

    public function update($patrocinador, $id)
    {
        return $this->requestType('PUT', 'patrocinador/{$id}');
        //return $this->put('patrocinador/{$id}');
    }
}

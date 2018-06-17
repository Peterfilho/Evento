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
      Encontra todos os patrocinadores
    */
    public function findAll()
    {
        return $this->requestType('GET', 'patrocinadores'); // generico
        //return $this->get('patrocinadores'); // especifico para get
    }

    /*
      Encontra um patrocinador
    */
    public function find($id)
    {
        return $this->requestType('GET', 'patrocinadores');
        //return $this->get('patrocinadores/{$id}');
    }

    /*
      Cadastra um patrocinador
    */
    public function save($patrocinador)
    {
        return $this->requestType('post', 'patrocinadores');
        //return $this->post('patrocinadores/{$id}');
    }

    /*
      Deleta um patrocinador
    */
    public function delete($id)
    {
        //return $this->requestType('..DELETE', 'patrocinadores/{$id}'); // arrumar metodo delete ou fazer especifico
        return $this->delete('patrocinadores/{$id}');
    }

    /*
      Edita um patrocinador
    */
    public function edit($id)
    {
        return $this->requestType('GET', 'patrocinadores/{$id}/edit');
        //return $this->get('patrocinadores/{$id}/edit');
    }

    public function update($patrocinador, $id)
    {
        return $this->requestType('PUT', 'patrocinadores/{$id}');
        //return $this->put('patrocinadores/{$id}');
    }
}

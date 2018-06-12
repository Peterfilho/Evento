<?php

namespace evento\Repositories;

use GuzzleHttp\Client;
// classe apenas para teste - não relacionada ao projeto
class Posts extends GuzzleHttpRequest
{
  protected $client;

  // classe responsavel pelos Postss


  function __construct(Client $client)
  {
      $this->client = $client;
  }

  /*
    Encontra todos os Posts
  */
  public function findAll()
  {
    return $this->requestType('GET', 'posts'); // generico
    //return $this->get('Postss'); // especifico para get
  }
  /*
    Encontra um Posts
  */
  public function find($id)
  {
    return $this->get('posts/{$id}');
  }

  /*
    Cadastra um Posts
  */
  public function save($Posts)
  {
    return $this->requestType('post', 'posts');
  }

  /*
    Deleta um Posts
  */
  public function delete($id)
  {
    return $this->requestType('..DELETE', 'posts/{$id}'); // arrumar metodo delete ou fazer especifico
  }

  /*
    Edita um Posts
  */
  public function edit($id)
  {
    return $this->requestType('PUT', 'Pposts/{$id}/edit');
  }

}

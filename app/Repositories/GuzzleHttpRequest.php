<?php

namespace evento\Repositories;

use GuzzleHttp\Client;

class GuzzleHttpRequest
{

  protected $client;

  function __construct(Client $client)
  {
    $this->client = $client;
  }

  /*
    Metodos especificos get - recebe apenas a url
  */
  public function get($url)
  {
    $response = $this->client->request('GET', $url);
    return json_decode( $response->getBody()->getContents());
  }

  public function post($url)
  {
    $response = $this->client->request('post', $url);
    return json_decode( $response->getBody()->getContents());
  }

  public function put($url)
  {
    $response = $this->client->request('put', $url);
    return json_decode( $response->getBody()->getContents());
  }

  public function delete($url)
  {
    $response = $this->client->request('delete', $url);
    return json_decode( $response->getBody()->getContents());
  }

  /*
    Metodo generico - recebe o method e a url
  */
  public function requestType($method, $url)
  {
    $response = $this->client->request($method, $url);
    return json_decode( $response->getBody()->getContents());
  }
}

<?php
namespace evento\Services;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Exception\ClientException;

abstract class AbstractService
{
    const DATABASE_API_VERSION = '/api/v1';
    const DATABASE_API_EMAIL = "team@thanos.com";
    const DATABASE_API_TOKEN = "zjg7izRE9KRhrpzYuoBa";
    const NOT_FOUND = 404;
    const NOT_FOUND_MESSAGE = 'Not found.';
    const INTERNAL_SERVER_ERROR = 500;
    const INTERNAL_SERVER_ERROR_MESSAGE = 'Internal server error.';
    /**
     * @see http://docs.guzzlephp.org/en/stable/
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;
    /**
     * The default value to wait until timeout in seconds
     * @var int
     */
    protected $defaultTimeout = 60;
    /**
     * The default resource url
     * @var string
     */
    protected $resource;
    /**
     * The default url to request
     * @var string
     */
    protected $defaultHeaders = [
        'Content-Type' => 'application/json',
        'Accept'       => 'application/json',
    ];
    public function __construct(string $resource)
    {
        $this->httpClient = new HttpClient();
        $this->resource = $resource;
    }
    public function find($id)
    {
        $options = $this->defaultOptions();
        //$response = $this->httpClient->get($this->databaseApiUrl("/{$this->resource}/{$id}"), $options);
        try {
            $response = $this->httpClient->get($this->databaseApiUrl("/{$this->resource}/{$id}"), $options);
        } catch (ClientException $e) {
            $this->handleGuzzleException($e);
        }
        return $this->parseResponseToJson($response);
    }
    public function findAll()
    {
        $options = $this->defaultOptions();
        $response = $this->httpClient->get($this->databaseApiUrl("/{$this->resource}"), $options);
        /*try {
            $response = $this->httpClient->get($this->databaseApiUrl("/{$this->resource}"), $options);
        } catch (ClientException $e) {
            $this->handleGuzzleException($e);
        }*/
        return $this->parseResponseToJson($response);
    }


    public function save(array $entity)
    {
        $body = [RequestOptions::JSON => $entity];

        $options = $this->defaultOptions();

        $options = array_merge_recursive($options, $body);

        $response = $this->httpClient->post($this->databaseApiUrl("/{$this->resource}"), $options);
        /*try {

            $response = $this->httpClient->post($this->databaseApiUrl("/{$this->resource}"), $options);

        } catch (ClientException $e) {
            $this->handleGuzzleException($e);
        }*/
        return $this->parseResponseToJson($response);
    }

    public function update(int $id, array $entity)
    {
        $body = [RequestOptions::JSON => $entity];
        $options = $this->defaultOptions();
        $options = array_merge_recursive($options, $body);
        try {
            $response = $this->httpClient->put($this->databaseApiUrl("/{$this->resource}/{$id}"), $options);
        } catch (ClientException $e) {
            $this->handleGuzzleException($e);
        }
        return $this->parseResponseToJson($response);
    }
    public function delete(int $id)
    {
        $options = $this->defaultOptions();
        $response = $this->httpClient->delete($this->databaseApiUrl("/{$this->resource}/{$id}"), $options);
        /*try {
            $response = $this->httpClient->delete($this->databaseApiUrl("/{$this->resource}/{$id}"), $options);
        } catch (ClientException $e) {
            $this->handleGuzzleException($e);
        }*/
        return $this->parseResponseToJson($response);
    }

    public function handleGuzzleException(ClientException $e)
    {
        switch ($e->getCode()) {
            case self::NOT_FOUND:
                abort(self::NOT_FOUND, self::NOT_FOUND_MESSAGE);
                break;
            default:
                abort(self::INTERNAL_SERVER_ERROR, self::INTERNAL_SERVER_ERROR_MESSAGE);
                break;
        }
    }

    private function parseResponseToJson(Response $response)
    {
        $data = $response->getBody()->getContents();
        return json_decode($data, true);
    }
    private function defaultOptions() {
        return [
            'query' => [
                'user_email' => self::DATABASE_API_EMAIL,
                'user_token' => self::DATABASE_API_TOKEN,
            ],
            'headers' => $this->defaultHeaders,
            RequestOptions::TIMEOUT => $this->defaultTimeout
        ];
    }
    private function databaseApiUrl($segment = '') {
        return env('API_ENDPOINT') . self::DATABASE_API_VERSION . $segment;
    }
}

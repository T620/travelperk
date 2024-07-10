<?php

namespace App\Traits;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

trait MakesRequests
{
    private PendingRequest $client;

    public function __construct()
    {
        $this->client = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ]);
    }

    public function withHeaders(array $headers): void
    {
        $this->client->withHeaders($headers);
    }

    /**
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function get(string $url, array $query = []): PromiseInterface|Response
    {
        /** @var Http $client */
        return $this->client->get($url, $query);
    }

    /**
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function post(string $url, array $data = []): PromiseInterface|Response
    {
        return $this->client->post($url, $data);
    }

    /**
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function put(string $url, array $data = []): PromiseInterface|Response
    {
        return $this->client->put($url, $data);
    }

    /**
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function patch(string $url, array $data = []): PromiseInterface|Response
    {
        return $this->client->patch($url, $data);
    }

    /**
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function delete(string $url, array $data = []): PromiseInterface|Response
    {
        return $this->client->delete($url, $data);
    }

    /**
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function head(string $url, array $query = []): PromiseInterface|Response
    {
        return $this->client->head($url, $query);
    }
}
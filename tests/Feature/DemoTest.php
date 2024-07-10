<?php

use Illuminate\Support\Facades\Http;

it('requests some fake JSON', function () {
    Http::fake(['*' => ['title' => 'foo', 'body' => 'bar', 'userId' => 1]]);

    $response = $this->get(
        route('api.v1.test')
    );

    expect($response->json())->toHaveKeys(['message', 'data']);
});

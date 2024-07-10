<?php

namespace App\Http\Controllers;

use App\Traits\MakesRequests;
use Illuminate\Http\JsonResponse;

class DemoController extends Controller
{
    use MakesRequests;

    public function index(): JsonResponse
    {
        return response()->json(['message' => 'Hello, World!']);
    }

    /**
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function test(): JsonResponse
    {
        $this->withHeaders([]);
        $data = $this->get('https://jsonplaceholder.typicode.com/posts/1');

        return response()->json([
            'message' => 'Here\'s the data you requested.',
            'data'    => $data->json(),
        ]);
    }
}
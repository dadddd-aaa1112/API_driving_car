<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Client\StoreRequest;
use App\Http\Requests\API\Client\UpdateRequest;
use App\Http\Resources\API\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return ClientResource::collection($clients);
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $client = Client::create($data);
        return $client;
    }

    public function destroy(Client $client) {
        $client->delete();
        return response([]);
    }

    public function update(UpdateRequest $updateRequest, Client $client) {
        $data = $updateRequest->validated();
        $result = $client->update($data);
        return $result;
    }

    public function show(Client $client) {
        return new ClientResource($client);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class ApiController extends Controller
{
    //
    public function index()
    {
      $url = "https://sample-api-service.default.svc.cluster.local/api/users";
      $method = "GET";

      $client = new Client();

      $response = $client->request($method, $url,['verify' => false]);

      dd(json_decode($response->getBody()));
    }
}

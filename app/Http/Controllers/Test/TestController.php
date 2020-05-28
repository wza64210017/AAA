<?php

namespace App\Http\Controllers\Test;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $client = new Client();
        dd($client->get($this->api));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function index(Request $request) {
        // dd($request->all());
        $client = new \GuzzleHttp\Client();
        $url = "http://store.getnord.live/index.php?route=product/product/stock";

        $response = $client->request('POST', $url, [
            'form_params' => $request->all()
        ]);
        // $response = $client->post($url,  ['from_params'=> $request->all()]);
    
        return $response->getBody();
    }
}

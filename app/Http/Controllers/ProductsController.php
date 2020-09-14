<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Cookie\CookieJar;

class ProductsController extends Controller
{
    function index(Request $request) {
        //return response("http://store.getnord.live/index.php?route=product/product/stock".'&lng='.$request->input('lang').'-'.$request->input('lang'));
        // dd($request->all());
        $client = new \GuzzleHttp\Client();
        $url = "https://store.getnord.com/index.php?route=product/product/stock".'&lng='.$request->input('lang').'-'.$request->input('lang');
        $cookieJar = CookieJar::fromArray([
            'language' => $request->input('lang')
        ], 'store.getnord.com');

        $response = $client->request('POST', $url, [
            'form_params' => $request->all(),
            'cookies' => $cookieJar
        ]);
        // $response = $client->post($url,  ['from_params'=> $request->all()]);

        return $response->getBody();
    }
    function product(Request $request) {


        //return response("http://store.getnord.live/index.php?route=product/product/stock".'&lng='.$request->input('lang').'-'.$request->input('lang'));
        // dd($request->all());
        $client = new \GuzzleHttp\Client();
        $url = "https://store.getnord.com/index.php?route=product/product/stock".'&lng='.$request->input('lang').'-'.$request->input('lang');
        $cookieJar = CookieJar::fromArray([
            'language' => $request->input('lang')
        ], 'store.getnord.com');

        $response = $client->request('POST', $url, [
            'form_params' => $request->all(),
            'cookies' => $cookieJar
        ]);
        // $response = $client->post($url,  ['from_params'=> $request->all()]);

        return $response->getBody();
    }
}

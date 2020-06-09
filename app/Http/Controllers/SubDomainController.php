<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubDomainController extends Controller
{
    public function __construct()
    {
        $this->middleware('localize');
    }

    function index($account,$locale){
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        return view('subdomains.'.$account.'.index')->with([
                'onHomePage' => false,
            ]
        );
    }
}

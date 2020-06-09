<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
        if ($account === 'www'){
            $phones = [
                'LYNX',
                'LEO',
                'WALRUS',
                'ONYX'
            ];
            // the specs section rows names are cached using the CsvFilesController
            $specs_section_rows_names = Cache::get('specs_section_rows_names');
            return view('pages.home.index')->with([
                'onHomePage' => true,
                'specs_section_rows_names' => $specs_section_rows_names,
                'phones' => $phones
            ]);
        }
        return view('subdomains.'.$account.'.index')->with([
                'onHomePage' => false,
            ]
        );
    }
}

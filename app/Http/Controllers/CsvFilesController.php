<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class CsvFilesController extends Controller
{

    /**
     * convert the csv file into array 
     * @param $name: String , lang: String
     * @return Array
     */
    public function csv_to_array($lang, $name) {

        $name = strtoupper($name);

        // the array of each translation
        $result = [];

        // rows names
        $row_names = [];

        // Rows
        $rows = [];

        // phones

        $phones = [
            'ONYX' => 'ONYX',
            'LYNX' => 'LYNX',
            'WALRUS' => 'WALRUS',
            'LEO' => 'LEO'
        ];

        $file_n = storage_path('app/public/translations/' . $lang . '/' . $name .'.csv');

        // open the file
        $file = fopen($file_n, 'r');

        $csv = array_map('str_getcsv', file($file_n));

        fclose($file);

        // dd($csv);

        foreach ($csv as $key) {
            // use the following row name in case you are working with the phone specs files
            // $row = \preg_replace('/\s+/', '', $key[0]) . $phones[strtoupper($name)];
            // to generate the data for translations for each product
            $row = \preg_replace('/\s+/', '', $key[0]);

            if( !isset($key[1]) ) { // to find the exact row where the csv file in not properly formated ( presence of return to line etc )
                dd($key[0]);
            }
            $result[$row] = $key[1];


            array_push($rows, $row);

            array_push($row_names, $row);

        }

        // generate a view and copy the html
        // but this methode is bad as we have other pages eachone requiring its one solutions.
        // $contents = view('pages.onyx.section_6', ['rows' => $rows, 'phones' => $phones])->render();

        /**
         * to get the row names
         */
        Cache::add('specs_section_rows_names', $row_names);
        // dd(Cache::get('specs_section_rows_names'));

        /**
         * the result row name + row data
         */
        dd($result);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CsvFilesController extends Controller
{

    /**
     * convert the csv file into direct array 
     * @param $name: String , $lang: String
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
            'ONYX',
            'LYNX',
            'WALRUS',
            'LEO'
        ];

        $file_n = storage_path('app/public/translations/' . $lang . '/' . $name .'.csv');

        // open the file
        $file = fopen($file_n, 'r');

        $csv = array_map('str_getcsv', file($file_n));

        fclose($file);

        foreach ($csv as $key) {
            // to get the row names
            
            // to generate the data for translations for each product
            $row = \preg_replace('/\s+/', '', $key[0]) ;
            $result[$row] = $key[1];
            array_push($rows, $row);

            $row_names[$row] = $key[0];
        }

        $contents = view('pages.onyx.section_6', ['rows' => $rows, 'phones' => $phones])->render();
        // do some other manipulation?
        return $contents;

        dd($row_names);

    }
}

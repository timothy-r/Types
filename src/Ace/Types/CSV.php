<?php namespace Ace\Types;

use Ace\Types\AnArray;

/**
* Attempts to convert CSV strings into arrays
* Always produces an array value
*/
class CSV extends AnArray
{
    public function __construct($value)
    {
        $value = str_getcsv($value, "\n", '"');
        $data = [];
        foreach($value as $row){
           $data []= str_getcsv($row, ',', '"');
        }
        parent::__construct($data);
    }

    /**
    * @return string
    */
    public function __toString()
    {
        $csv = fopen('php://temp/maxmemory:'. (5*1024*1024), 'r+');
        foreach (parent::value() as $row){
            fputcsv($csv, $row);
        }
        rewind($csv);
        $string = stream_get_contents($csv);
        return trim($string);
    }
}

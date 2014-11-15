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
        $value = str_getcsv($value, "\n");
        $data = [];
        foreach($value as $row){
           $data []= str_getcsv($row);
        }
        parent::__construct($data);
    }

    /**
    * @return string
    */
    public function __toString()
    {
        $string = '';
        foreach (parent::value() as $row){
            $string .=  implode(',', $row) . "\n";
        }
        return trim($string);
    }
}

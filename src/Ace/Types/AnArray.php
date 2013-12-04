<?php namespace Ace\Types;

use Ace\Types\TypeInterface;

/**
* Attempts to convert variables into arrays
* Always produces an array value
*/
class AnArray implements TypeInterface
{
    /**
    * @var array
    */
    private $value;
    
    public function __construct($value)
    {
        if (is_object($value)){
            $this->value = (array) $value;
        } else if (is_array($value)){
            $this->value = $value;
        } else {
            // do something else - integer, float, string...
        }
    }

    /**
    * @return string
    */
    public function __toString()
    {
        return print_r($this->value, 1);
    }
    
    /**
    * @return array
    */
    public function value()
    {
        return $this->value;
    }
}

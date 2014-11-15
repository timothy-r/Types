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
    private $value = [];
    
    public function __construct($value)
    {
        if (is_object($value)){
            $this->value = (array) $value;
        } else if (is_array($value)){
            $this->value = $value;
        } else if (!empty($value) && !is_null($value)) {
            // convert value to an array with 1 item unless value is empty
            $this->value = [$value];
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

    public function valid()
    {
        return is_array($this->value);
    }
}

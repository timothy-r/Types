<?php namespace Ace\Types;

use Ace\Types\TypeInterface;

/**
* Converts mixed type variables into strings
*/
class String implements TypeInterface
{
    /**
    * @var string
    */
    private $value;
    
    public function __construct($value)
    {
        if (is_array($value)){
            $this->value = print_r($value, true);
        } else if (is_object($value)){
            $this->value = print_r($value, true);
        } else {
            $this->value = "$value";
        }
    }

    public function __toString()
    {
        return $this->value;
    }

    public function value()
    {
        return $this->value;
    }
}


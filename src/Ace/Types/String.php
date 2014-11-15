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
            if (is_callable([$value, '__toString'])){
                $this->value = $value->__toString();
            } else {
                $this->value = print_r($value, true);
            }
        } else {
            // neither an array nor an object instance
            $this->value = "$value";
        }
    }

    public function __toString()
    {
        return $this->value();
    }

    public function value()
    {
        return $this->value;
    }

    public function valid()
    {
        return true;
    }
}


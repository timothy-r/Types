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
            $value = print_r($value, true);
        } else if (is_object($value)){
            if (is_callable([$value, '__toString'])){
                $value = $value->__toString();
            } else {
                $value = print_r($value, true);
            }
        } else if (!is_string($value)){
            // neither an array nor an object instance
            $value = (string)$value;
        }

        $this->value = $value;
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


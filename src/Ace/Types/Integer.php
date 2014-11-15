<?php namespace Ace\Types;

use Ace\Types\TypeInterface;

/**
* Converts mixed type variables into integers
*/
class Integer implements TypeInterface
{
    /**
    * @var integer
    */
    private $value;
    
    public function __construct($value)
    {
        if (is_numeric($value)){
            $this->value = (integer)$value;
        }
    }

    public function __toString()
    {
        return "{$this->value()}";
    }

    public function value()
    {
        return $this->value ? : 0;
    }

    public function valid()
    {
        return !is_null($this->value);
    }
}


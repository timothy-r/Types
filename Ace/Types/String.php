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
        $this->value = "$value";
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


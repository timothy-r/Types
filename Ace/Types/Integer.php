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
        $this->value = (integer)$value;
    }

    public function __toString()
    {
        return "{$this->value}";
    }

    public function value()
    {
        return $this->value;
    }
}

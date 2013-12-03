<?php namespace Ace\Types;

/**
* Converts mixed type variables into booleans
*/
class Integer
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


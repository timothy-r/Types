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
        $this->value = $value;
    }

    public function __toString()
    {
        return print_r($this->value, 1);
    }

    public function value()
    {
        return $this->value;
    }
}

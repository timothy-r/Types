<?php namespace Ace\Types;

use Ace\Types\TypeInterface;

/**
* Converts mixed type variables into booleans
*/
class Boolean implements TypeInterface
{
    /**
    * @var boolean
    */
    private $value;
    
    public function __construct($value)
    {
        if ('false' === $value){
            $this->value = false;
        } else {
            $this->value = $value ? true : false;
        }
    }

    public function __toString()
    {
        return $this->value ? 'true' : 'false';
    }

    public function value()
    {
        return $this->value;
    }
}

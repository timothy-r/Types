<?php namespace Ace\Types;

/**
* Converts mixed type variables into booleans
*/
class Boolean
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

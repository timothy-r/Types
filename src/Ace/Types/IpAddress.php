<?php namespace Ace\Types;

use Ace\Types\TypeInterface;

/**
* Contains an IP v4 address
*/
class IpAddress implements TypeInterface
{
    /**
    * @var string a valid ipaddress or empty
    */
    private $value = '';
   
    public function __construct($value)
    {
        if (filter_var($value, FILTER_VALIDATE_IP)){
            $this->value = $value;
        }
    }

    /**
    * @return string
    */
    public function __toString()
    {
        return $this->value;
    }
    
    /**
    * @return array
    */
    public function value()
    {
        return $this->value;
    }

    public function valid()
    {
        return !empty($this->value);
    }
}

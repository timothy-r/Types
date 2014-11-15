<?php namespace Ace\Types;

use Ace\Types\TypeInterface;

/**
* Contains an ipaddress
*/
class IpAddress implements TypeInterface
{
    /**
    * @var string a valid ipaddress or empty
    */
    private $value = '';
   
    public function __construct($value)
    {
        if (ip2long((string)$value)){
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

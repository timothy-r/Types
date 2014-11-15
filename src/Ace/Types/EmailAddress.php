<?php namespace Ace\Types;

use Ace\Types\TypeInterface;

/**
* Contains an email address
*/
class EmailAddress implements TypeInterface
{
    /**
    * @var string a valid email address or empty
    */
    private $value = '';
   
    private $pattern = '/^.+@.+$/';

    public function __construct($value)
    {
        if (is_string($value) && preg_match($this->pattern, $value)){
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


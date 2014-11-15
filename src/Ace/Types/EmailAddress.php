<?php namespace Ace\Types;

use Ace\Types\TypeInterface;
use Ace\Types\String;

/**
* Contains an email address
*/
class EmailAddress extends String
{
    /**
    * @return string
    */
    public function __toString()
    {
        return $this->value();
    }
    
    /**
    * @return string
    */
    public function value()
    {
        return $this->valid() ? parent::value() : '';
    }

    /**
    * @return boolean
    */
    public function valid()
    {
        $pattern = '/^.+@.+$/';
        return (boolean) preg_match($pattern, parent::value());
    }
}


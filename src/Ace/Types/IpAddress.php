<?php namespace Ace\Types;

use Ace\Types\String;

/**
* Contains an IP v4 or v6 address as a string
*/
class IpAddress extends String
{
    public function value()
    {
        return $this->valid() ? parent::value() : '';
    }

    public function valid()
    {
        return (boolean) (filter_var(parent::value(), FILTER_VALIDATE_IP));
    }
}

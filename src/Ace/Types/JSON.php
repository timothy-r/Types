<?php namespace Ace\Types;

use Ace\Types\String;

/**
* Converts mixed type variables into JSON
* Handles invalid input
*/
class JSON extends String
{
    public function __construct($value)
    {
        if (!is_string($value)){
            $value = json_encode($value);
        }
        parent::__construct($value);
    }

    public function __toString()
    {
        return $this->valid() ? parent::value() : '';
    }

    public function value()
    {
        return json_decode(parent::value(),1 );
        return $this->valid() ? json_decode(parent::value(),1 ) : null;
    }

    public function valid()
    {
        return (boolean) is_array(json_decode(parent::value(), 1));
    }
}


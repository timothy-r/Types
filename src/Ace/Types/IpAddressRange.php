<?php namespace Ace\Types;

use Ace\Types\String;
use Ace\Types\IpAddress;

/**
* Contains an IP address range
*/
class IpAddressRange extends String
{
    public function value()
    {
        return $this->valid() ? parent::value() : '';
    }

    public function valid()
    {
        $addr = parent::value();
        if ((new IpAddress($addr))->valid()){
            return true;
        }
        $parts = explode('/', $addr);
        if (count($parts) === 2){
            if ((new IpAddress($parts[0]))->valid()){
                // test the range part
                return (0 < (integer)$parts[1]) && ((integer)$parts[1] <= 32);
            }
        }
        return false;
    }
}

<?php
use Ace\Types\IpAddress;

class IpAddressTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            ['192.168.1.0', '192.168.1.0', true],
            ['168.1.0', '', false],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToIpAddress($variable, $string, $valid)
    {
        $this->assertSame($string, new IpAddress($variable) . '');
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $valid)
    {
        $this->assertSame($string, (new IpAddress($variable))->value());
    }

    /**
    * @dataProvider getValues
    */
    public function testValidIsAlwaysTrue($variable, $string, $valid)
    {
        $this->assertSame($valid, (new IpAddress($variable))->valid());
    }
}


<?php
use Ace\Types\IpAddressV4;

class IpAddressV4Test extends PHPUnit_Framework_TestCase
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
    public function testToString($variable, $string, $valid)
    {
        $this->assertSame($string, new IpAddressV4($variable) . '');
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $valid)
    {
        $this->assertSame($string, (new IpAddressV4($variable))->value());
    }

    /**
    * @dataProvider getValues
    */
    public function testValidIsAlwaysTrue($variable, $string, $valid)
    {
        $this->assertSame($valid, (new IpAddressV4($variable))->valid());
    }
}


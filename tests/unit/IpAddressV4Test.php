<?php
use Ace\Types\IpAddressV4;

class IpAddressV4Test extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            ['192.168.1.0', '192.168.1.0', true],
            ['2001:0db8:85a3:0000:0000:8a2e:0370:7334', '2001:0db8:85a3:0000:0000:8a2e:0370:7334', true],
            ['192.168.1.0/28', '', false],
            ['192.168.1.0/5528', '', false],
            ['168.1.0', '', false],
            ['not an ip address', '', false],
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


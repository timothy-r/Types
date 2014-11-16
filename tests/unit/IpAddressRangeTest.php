<?php
use Ace\Types\IpAddressRange;

class IpAddressRangeTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            ['192.168.1.0', '192.168.1.0', true],
            ['2001:0db8:85a3:0000:0000:8a2e:0370:7334', '2001:0db8:85a3:0000:0000:8a2e:0370:7334', true],
            ['192.168.1.0/28', '192.168.1.0/28', true],
            ['192.168.1.0/0', '192.168.1.0/0', true],
            ['192.168.1.0/5528', '', false],
            ['not an ip address range', '', false],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string, $valid)
    {
        $this->assertSame($string, new IpAddressRange($variable) . '');
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $valid)
    {
        $this->assertSame($string, (new IpAddressRange($variable))->value());
    }

    /**
    * @dataProvider getValues
    */
    public function testValid($variable, $string, $valid)
    {
        $this->assertSame($valid, (new IpAddressRange($variable))->valid());
    }
}


<?php
use Ace\Types\EmailAddress;

class EmailAddressTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            ['test.user@boo.ga.loo.net', 'test.user@boo.ga.loo.net', 'test.user@boo.ga.loo.net'],
            [[], '', ''],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string, $expected)
    {
        $this->assertSame($string, new EmailAddress($variable) . "");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $expected)
    {
        $boolean = new EmailAddress($variable);
        $this->assertSame($expected, $boolean->value());
    }
}


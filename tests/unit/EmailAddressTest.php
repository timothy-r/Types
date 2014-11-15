<?php
use Ace\Types\EmailAddress;

class EmailAddressTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            ['test.user@boo.ga.loo.net', 'test.user@boo.ga.loo.net', true],
            ['not an email address', '', false],
            [[], '', false],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string, $valid)
    {
        $this->assertSame($string, new EmailAddress($variable) . "");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $valid)
    {
        $this->assertSame($string, (new EmailAddress($variable))->value());
    }

    /**
    * @dataProvider getValues
    */
    public function testValid($variable, $string, $valid)
    {
        $this->assertSame($valid, (new EmailAddress($variable))->valid());
    }
}


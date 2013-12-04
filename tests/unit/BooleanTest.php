<?php
use Ace\Types\Boolean;

class BooleanTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            [1, "true", true],
            [1.0, "true", true],
            [0, "false", false],
            ["0", "false", false],
            [false, "false", false],
            ["false", "false", false],
            [true, "true", true],
            ["true", "true", true],
            [[], "false", false],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string, $expected)
    {
        $this->assertSame($string, new Boolean($variable) . "");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $expected)
    {
        $boolean = new Boolean($variable);
        $this->assertSame($expected, $boolean->value());
    }
}

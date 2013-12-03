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
    public function testToString($value, $string, $value)
    {
        $boolean = new Boolean($value);
        $this->assertSame($string, "$boolean");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($value, $string, $value)
    {
        $boolean = new Boolean($value);
        $this->assertSame($value, $boolean->value());
    }
}

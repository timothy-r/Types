<?php
use Ace\Types\Integer;

class IntegerTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            [1, "1", 1],
            [1.0, "1", 1],
            ["1.0.0", "1", 1],
            [0, "0", 0],
            ["878", "878", 878],
            [[], "0", 0],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string, $expected)
    {
        $this->assertSame($string, new Integer($variable) . "");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $expected)
    {
        $boolean = new Integer($variable);
        $this->assertSame($expected, $boolean->value());
    }
}

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
    public function testToString($value, $string, $value)
    {
        $boolean = new Integer($value);
        $this->assertSame($string, "$boolean");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($value, $string, $value)
    {
        $boolean = new Integer($value);
        $this->assertSame($value, $boolean->value());
    }
}

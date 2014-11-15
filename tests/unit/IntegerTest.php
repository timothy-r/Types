<?php
use Ace\Types\Integer;

class IntegerTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            [1, "1", 1],
            [1.0, "1", 1],
            ["1.0.0", "0", 0],
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
        $integer = new Integer($variable);
        $this->assertSame($expected, $integer->value());
    }

    /**
    * @dataProvider getValues
    */
    public function testValid($variable, $string, $expected)
    {
        $integer = new Integer($variable);
        if (is_numeric($variable)){
            $this->assertTrue($integer->valid(), sprintf('Expected "%s" to be valid', print_r($variable,1)));
        } else {
            $this->assertFalse($integer->valid(), sprintf('Expected "%s" to be invalid', print_r($variable,1)));
        }
    }
}

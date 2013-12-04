<?php
use Ace\Types\AnArray;

class AnArrayTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            [[1], print_r([1], 1), [1]],
            ['[1]', print_r([1], 1), [1]],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string, $expected)
    {
        $this->assertSame($string, new AnArray($variable) . "");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $expected)
    {
        $boolean = new AnArray($variable);
        $this->assertSame($expected, $boolean->value());
    }
}
